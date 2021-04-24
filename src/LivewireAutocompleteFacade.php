<?php

namespace ChrisDiCarlo\LivewireAutocomplete;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Chrisdicarlo\LivewireAutocomplete\LivewireAutocomplete
 */
class LivewireAutocompleteFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'livewire-autocomplete';
    }
}
