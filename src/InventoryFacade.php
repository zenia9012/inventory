<?php

namespace Zenia9012\Inventory;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Zenia9012\Inventory\Skeleton\SkeletonClass
 */
class InventoryFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'inventory';
    }
}
