<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/9/2016
 * Time: 10:32 PM.
 */

namespace Innovate\Api\Transformers;

class ProductTransformer extends Transformer
{
    /**
     * @param $product
     *
     * @return mixed
     */
    public function transform($product)
    {
        return [
            'id'                => $product['id'],
            'SKU'               => $product['sku'],
            'Name'              => $product['name'],
            'Short Description' => $product['short_description'],
            'Price'             => $product['price'],
            'Previous Price'    => $product['previous_price'],
            'Currency'          => $product['currency'],
            'Image'             => $product['img_medium'],
        ];
    }
}
