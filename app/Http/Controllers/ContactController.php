<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{

    public function index(): View
    {
        return view('frontend.contact.index');
    }

    public function send(Request $request)
    {
        try {
            // Validate the form data
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'number' => 'required|string|max:20',
                'subject' => 'required|string',
                'message' => 'required|string|max:5000',
            ]);

            $data = [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'number' => $validated['number'],
                'subject' => $validated['subject'],
                'message' => $validated['message'],
            ];


            Mail::send('emails.contact-form', ['data' => $data], function($message) use ($data) {
                $message->to(env('CONTACT_FORM_RECIPIENT', 'default@example.com'))
                        ->subject('New Contact Form Submission - ' . $data['subject'])
                        ->from(config('mail.from.address'), config('mail.from.name'));
            });

            return response()->json([
                'success' => true,
                'message' => 'Your message has been sent successfully! We will get back to you soon.'
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Please fill all required fields correctly.',
                'errors' => $e->errors()
            ], 422);
            
        } catch (\Exception $e) {
            // Log the actual error for debugging
            Log::error('Contact form error: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Sorry, there was an error sending your message. Please try again later.',
                'error' => $e->getMessage() // Remove this line in production for security
            ], 500);
        }
    }

}