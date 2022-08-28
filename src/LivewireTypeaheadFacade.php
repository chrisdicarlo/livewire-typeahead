<?php

namespace ChrisDiCarlo\LivewireTypeahead;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ChrisDicarlo\LivewireTypeahead\LivewireTypeahead
 */
class LivewireTypeaheadFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'livewire-typeahead';
    }
}
