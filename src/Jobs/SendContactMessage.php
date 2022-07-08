<?php

namespace Ikoncept\FabriqContactForm\Jobs;

use Ikoncept\FabriqContactForm\Events\ContactMessageSent;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendContactMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Sent data
     *
     * @var array
     */
    public $attributes;

    /**
     * Recipients
     *
     * @var array
     */
    public $recipients;

    /**
     * BCC recipients
     *
     * @var array
     */
    public $bccRecipients;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(array $attributes, array $recipients, array $bccRecipients = [])
    {
        $this->attributes = $attributes;
        $this->recipients = $recipients;
        $this->bccRecipients = $bccRecipients;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $mailable = config('fabriq-contact-form.mailable');

        Mail::to($this->recipients)
            ->bcc($this->bccRecipients)
            ->send(new $mailable($this->attributes));

        ContactMessageSent::dispatch($this->attributes);
    }
}
