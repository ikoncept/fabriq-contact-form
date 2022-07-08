<?php

namespace Ikoncept\FabriqContactForm\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ikoncept\FabriqContactForm\FabriqContactForm
 */
class FabriqContactForm extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'fabriq-contact-form';
    }
}
