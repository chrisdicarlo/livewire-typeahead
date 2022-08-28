<?php

namespace ChrisDiCarlo\LivewireTypeahead\Tests;

use ChrisDiCarlo\LivewireTypeahead\LivewireTypeaheadServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'ChrisDiCarlo\\LivewireTypeahead\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LivewireTypeaheadServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        include_once __DIR__.'/../database/migrations/create_livewire_typeahead_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
