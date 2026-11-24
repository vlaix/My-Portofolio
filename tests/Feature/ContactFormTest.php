<?php

namespace Tests\Feature;

use App\Mail\ContactMessageMail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test successful contact form submission saves to database and sends mail.
     */
    public function test_contact_form_saves_to_database_and_sends_email(): void
    {
        Mail::fake();

        $formData = [
            'name' => 'Aditya Pratama',
            'email' => 'aditya@example.com',
            'subject' => 'Project Inquiry',
            'message' => 'Halo Reyvaldi, saya tertarik untuk mendiskusikan peluang proyek web dengan Anda.',
        ];

        $response = $this->post(route('contact.send'), $formData);

        $response->assertSessionHas('success');
        $this->assertDatabaseHas('messages', [
            'name' => 'Aditya Pratama',
            'email' => 'aditya@example.com',
            'subject' => 'Project Inquiry',
        ]);

        Mail::assertSent(ContactMessageMail::class, function (ContactMessageMail $mail) {
            return $mail->hasTo('vlaix24@gmail.com') &&
                   $mail->contactName === 'Aditya Pratama' &&
                   $mail->contactEmail === 'aditya@example.com';
        });
    }

    /**
     * Test contact form validation fails when fields are missing.
     */
    public function test_contact_form_validation_fails_on_empty_fields(): void
    {
        $response = $this->post(route('contact.send'), []);

        $response->assertSessionHasErrors(['name', 'email', 'message']);
    }
}
