<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 10:30 PM.
 */
namespace Innovate\Products\Events;

/**
 * Class ProductWasArchived.
 */
class ProductWasArchived
{
    /**
     * @var Product
     */
    public $product;

    /**
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }
}
