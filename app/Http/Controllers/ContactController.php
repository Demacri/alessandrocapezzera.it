<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMailable;

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

        Mail::to('receiver_email@example.com')->send(new ContactFormMailable($details));

        return response()->json(['message' => 'Il tuo messaggio è stato inviato. Grazie!']);
    }
}
