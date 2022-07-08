<?php

namespace Ikoncept\FabriqContactForm;

use Ikoncept\FabriqContactForm\Commands\FabriqContactFormCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FabriqContactFormServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('fabriq-contact-form')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_fabriq-contact-form_table')
            ->hasCommand(FabriqContactFormCommand::class);
    }
}
