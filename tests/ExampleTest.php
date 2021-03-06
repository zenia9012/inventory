<?php

namespace Zenia9012\Inventory\Tests;

use Orchestra\Testbench\TestCase;
use Zenia9012\Inventory\InventoryServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [InventoryServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
