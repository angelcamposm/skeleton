<?php

namespace Tests;

use Illuminate\Foundation\Application;
use Orchestra\Testbench\TestCase;

class SkeletonTestCase extends TestCase
{
    protected $loadEnvironmentVariables = true;

    /**
     * Override application aliases.
     *
     * @param  Application  $app
     * @return array<string, class-string<\Illuminate\Support\Facades\Facade>>
     */
    protected function getPackageAliases($app)
    {
        return [
            //'Acme' => 'Acme\Facade',
        ];
    }

    /**
     * Get package providers.
     *
     * @param  Application  $app
     * @return array<int, class-string<\Illuminate\Support\ServiceProvider>>
     */
    protected function getPackageProviders($app)
    {
        return [
            //'Acme\AcmeServiceProvider',
        ];
    }
}
