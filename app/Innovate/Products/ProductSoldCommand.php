<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 10:18 PM.
 */
namespace Innovate\Products;

/**
 * Class ProductSoldCommand.
 */
class ProductSoldCommand
{
    /**
     * @var
     */
    public $productId;

    /**
     * @param $productId
     */
    public function __construct($productId)
    {
        $this->productId = $productId;
    }
}
