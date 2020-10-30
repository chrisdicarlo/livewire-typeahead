<?php

namespace Chrisdicarlo\LivewireTypeahead\Tests;

use Orchestra\Testbench\TestCase;
use Chrisdicarlo\LivewireTypeahead\LivewireTypeaheadServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LivewireTypeaheadServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
