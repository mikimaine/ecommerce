<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 10:18 PM
 */

namespace Innovate\Products;


/**
 * Class ProductSoldCommand
 * @package Innovate\Products
 */
class ProductSoldCommand {

    /**
     * @var
     */
    public $productId;

    /**
     * @param $productId
     */
    function __construct($productId)
    {
        $this->productId = $productId;
    }

}