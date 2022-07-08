<?php

namespace Ikoncept\FabriqContactForm\Http\Controllers;

use Ikoncept\FabriqContactForm\Jobs\SendContactMessage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContactMessageController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $attributes = $request->validate(config('fabriq-contact-form.validation_rules'));
        SendContactMessage::dispatch(
            $attributes,
            config('fabriq-contact-form.recipients'),
            config('fabriq-contact-form.bcc_recipients')
        );

        return response()->json([
            'code' => 200,
            'message' => 'Message was sent',
        ]);
    }
}
