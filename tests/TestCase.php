<?php

namespace Dcp\Tests;

use Spatie\LaravelData\LaravelDataServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            LaravelDataServiceProvider::class,
        ];
    }
}
