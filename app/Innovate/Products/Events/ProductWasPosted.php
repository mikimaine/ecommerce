<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 5:31 PM
 */

namespace Innovate\Products\Events;
use Innovate\Products\Product;


/**
 * Class ProductWasPosted
 * @package Innovate\Products
 */
class ProductWasPosted {

    /**
     * @var Product
     */
    public $product;

    /**
     * @param Product $product
     */
    function __construct(Product $product)
    {
        $this->product = $product;

    }


}