<?php

namespace mjczz\Awesome\Tests;

use mjczz\Awesome\Facades\Awesome;
use mjczz\Awesome\ServiceProvider;
use Orchestra\Testbench\TestCase;

class AwesomeTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'awesome' => Awesome::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
