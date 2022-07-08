<?php

use Ikoncept\FabriqContactForm\Http\Controllers\ContactMessageController;
use Illuminate\Support\Facades\Route;

Route::post('/api/contact-message', ContactMessageController::class);
