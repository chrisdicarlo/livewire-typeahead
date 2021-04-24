<?php

namespace ChrisDiCarlo\LivewireAutocomplete;

use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ChrisDiCarlo\LivewireAutocomplete\Http\Livewire\Autocomplete;

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
