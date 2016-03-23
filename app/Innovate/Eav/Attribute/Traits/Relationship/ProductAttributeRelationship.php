<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/23/2016
 * Time: 10:03 PM
 */

namespace Innovate\Eav\Attribute\Traits\Relationship;


trait ProductAttributeRelationship {


    public function product_attribute_category()
    {
        return $this->belongsTo('Innovate\Eav\Category\ProductAttributeCategory','product_category_id');
    }
}