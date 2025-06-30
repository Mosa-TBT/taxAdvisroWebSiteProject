<?php

namespace App\Http\Controllers;

use App\Models\ContactDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email',
            'subject' => 'required|string|max:150',
            'message' => 'required|string|max:2000',
        ]);

        try {
            $contactDetails = ContactDetails::first();

            if (!$contactDetails || !$contactDetails->email) {
                return redirect()->back()->withErrors([
                    'email' => 'Recipient email is currently unavailable. Please try again later.',
                ]);
            }

            $recipientEmail = $contactDetails->email;

        } catch (\Exception $e) {
            return redirect()->back()->withErrors([
                'email' => 'Failed to retrieve recipient email. Please try again later.',
            ]);
        }

        // Send the email
        Mail::html("
            <strong>Name:</strong> {$validated['name']}<br>
            <strong>Email:</strong> {$validated['email']}<br>
            <strong>Subject:</strong> {$validated['subject']}<br><br>
            <strong>Message:</strong><br>" . nl2br(e($validated['message'])), function ($message) use ($recipientEmail) {
                $message->to($recipientEmail)
                        ->subject('New Contact Message from Website');
        });

        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}
