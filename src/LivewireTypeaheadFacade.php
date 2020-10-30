<?php

namespace Chrisdicarlo\LivewireTypeahead;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Chrisdicarlo\LivewireTypeahead\Skeleton\SkeletonClass
 */
class LivewireTypeaheadFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'livewire-typeahead';
    }
}
