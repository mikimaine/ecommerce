<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/23/2016
 * Time: 9:47 PM
 */

namespace Innovate\Eav\Category;


use Innovate\BaseModel;
use Innovate\Eav\Category\Traits\Relationship\ProductAttributeCategoryRelationship;
use Innovate\Eav\Category\Traits\Attribute\ProductAttributeCategoryAttribute;

class ProductAttributeCategory extends BaseModel {

    use ProductAttributeCategoryAttribute,ProductAttributeCategoryRelationship;


    protected $table = 'product_attribute_category';


    protected  $fillable = ['attribute_set_name'];

}