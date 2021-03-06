<?php

namespace Ikoncept\FabriqContactForm;

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
            ->hasRoute('api');
    }
}
