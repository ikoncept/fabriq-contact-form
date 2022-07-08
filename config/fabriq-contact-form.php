<?php
// config for Ikoncept/FabriqContactForm
return [
    'recipients' => [
        'example@example.com'
    ],

    'bcc_recipients' => ['fopper@ss.com'],

    'include_app_name' => true,

    'subject' => 'Nytt meddelande från hemsidan',

    'mail_view' => 'fabriq-contact-form::emails.contact_plain',

    'mailable' => \Ikoncept\FabriqContactForm\Mail\ContactMessage::class,

    'form_request_class' => \Ikoncept\FabriqContactForm\Http\Requests\ContactMessageRequest::class,

    'validation_rules' => [
        'name' => 'required|max:125',
        'email' => 'required|max:125',
        'phone' => 'max:30',
        'message' => 'required|max:3000'
    ]
];
