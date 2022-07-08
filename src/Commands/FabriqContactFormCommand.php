<?php

namespace Ikoncept\FabriqContactForm\Commands;

use Illuminate\Console\Command;

class FabriqContactFormCommand extends Command
{
    public $signature = 'fabriq-contact-form';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
