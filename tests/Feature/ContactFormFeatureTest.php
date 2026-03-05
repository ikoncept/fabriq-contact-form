<?php

namespace Tests\Feature;

use Ikoncept\FabriqContactForm\Events\ContactMessageReceiptSent;
use Ikoncept\FabriqContactForm\Events\ContactMessageSent;
use Ikoncept\FabriqContactForm\Jobs\SendContactMessage;
use Ikoncept\FabriqContactForm\Tests\TestCase;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Mail;

class ContactFormFeatureTest extends TestCase
{
    public function test_it_can_send_a_contact_message()
    {
        // Arrange
        Mail::fake();
        Event::fake();
        Config::set('fabriq-contact-form.send_receipt', true);
        $data = [
            'name' => 'Albin Nilsson',
            'email' => 'albin@karabin.se',
            'message' => 'Introducing the Saint Kitts and Nevis-inspired Salad, blending emotional style with local craftsmanship',
        ];

        // Act
        SendContactMessage::dispatchSync(
            $data,
            config('fabriq-contact-form.recipients'),
            config('fabriq-contact-form.bcc_recipients')
        );

        // Assert
        Mail::assertSent(config('fabriq-contact-form.receipt_mailable'));
        Event::assertDispatched(ContactMessageSent::class);
        Event::assertDispatched(ContactMessageReceiptSent::class);
    }
}
