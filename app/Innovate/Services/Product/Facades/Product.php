<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/19/2016
 * Time: 11:35 AM
 */

namespace Innovate\Services\Product\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * Class Product
 * @package Innovate\Services\Product\Facades
 */
class Product extends Facade{


    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'product';
    }

}