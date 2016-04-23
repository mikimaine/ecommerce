<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/22/2016
 * Time: 3:46 PM
 */

namespace Innovate\Eav\Value\Traits\Relationship;


trait ProductAttributeVarcharRelationship {

    public function product()
    {
        return $this->belongsTo('Innovate\Products\Product','product_id');
    }

    public function attribute()
    {
        return $this->belongsTo('Innovate\Eav\Attribute\ProductAttribute','product_attribute_id');
    }
}