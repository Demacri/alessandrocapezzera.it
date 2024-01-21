<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Log;

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
            $mailable = new ContactFormMailable($details);
            $mailable->replyTo($request->email, $request->name);
            Mail::to(env('MAIL_TO_CONTACT_ADDRESS'))->send($mailable);
        } catch (\Exception $e) {
            Log::info(json_encode($details));
            Log::error($e->getMessage());
            return response('', 500)->json(['error' => true, 'message' => __('Error sending message, please try again later.')]);
        }
        return response()->json(['error' => false, 'message' => __('Message sent successfully!')]);
    }
}
