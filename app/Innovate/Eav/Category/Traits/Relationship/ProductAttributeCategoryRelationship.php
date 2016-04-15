<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/23/2016
 * Time: 9:50 PM
 */

namespace Innovate\Eav\Category\Traits\Relationship;


trait ProductAttributeCategoryRelationship {



    public function product_attributes()
    {
        return $this->hasMany('Innovate\Eav\Attribute\ProductAttribute','product_category_id');
    }

}