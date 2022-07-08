<?php

namespace Ikoncept\FabriqContactForm\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\InteractsWithSockets;

class ContactMessageSent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * The data sent
     *
     * @var array
     */
    public $contactData;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(array $contactData)
    {
        $this->contactData = $contactData;
    }
}
