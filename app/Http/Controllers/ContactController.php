<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];
        try {
            $recaptchaToken = $request->input('g-recaptcha-response');
            $response = Http::withOptions(['verify' => false])->asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => env('RECAPTCHA_SECRET_KEY'),
                'response' => $recaptchaToken,
            ]);
            if (!$response->successful() || !$response->json()['success']) {
                throw new \Exception('Recaptcha failed');
            }
            $mailable = new ContactFormMailable($details);
            $mailable->replyTo($request->email, $request->name);
            Mail::to(env('MAIL_TO_CONTACT_ADDRESS'))->send($mailable);
        } catch (\Exception $e) {
            Log::info(json_encode($details));
            Log::error($e->getMessage());
            return response()->json(['success' => false, 'message' => __('Error sending message, please try again later.')]);
        }
        return response()->json(['success' => true, 'message' => __('Message sent successfully!')]);
    }
}
