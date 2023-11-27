<?php

namespace Laraditz\Lazada;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laraditz\Lazada\Skeleton\SkeletonClass
 */
class LazadaFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lazada';
    }
}
