<?php

namespace Chrisdicarlo\LivewireAutocomplete;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Chrisdicarlo\LivewireAutocomplete\Commands\LivewireAutocompleteCommand;

class LivewireAutocompleteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('livewire-autocomplete')
            ->hasViews();
    }
}
