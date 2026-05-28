<?php

namespace NoteBrainsLab\FilamentEmailTemplates\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use NoteBrainsLab\FilamentEmailTemplates\FilamentEmailTemplatesServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            FilamentEmailTemplatesServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
