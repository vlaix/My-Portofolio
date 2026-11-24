<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageMail;
use App\Models\Message;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Handle incoming contact form submission.
     */
    public function send(Request $request): RedirectResponse|JsonResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string', 'min:5', 'max:5000'],
        ]);

        $message = Message::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'] ?? null,
            'message' => $validated['message'],
        ]);

        try {
            Mail::to('vlaix24@gmail.com')->send(new ContactMessageMail(
                contactName: $message->name,
                contactEmail: $message->email,
                contactMessage: $message->message,
                contactSubject: $message->subject,
            ));
        } catch (\Throwable $e) {
            Log::error('Failed to send contact notification email: '.$e->getMessage(), [
                'exception' => $e,
                'message_id' => $message->id,
            ]);
        }

        $successText = 'Your message has been sent successfully! Thank you for reaching out.';

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => $successText,
            ]);
        }

        return redirect()->to(url()->previous().'#contact')->with('success', $successText);
    }
}
