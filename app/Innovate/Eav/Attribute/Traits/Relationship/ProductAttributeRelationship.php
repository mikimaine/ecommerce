<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/23/2016
 * Time: 10:03 PM.
 */
namespace Innovate\Eav\Attribute\Traits\Relationship;

/**
 * Class ProductAttributeRelationship.
 */
trait ProductAttributeRelationship
{
    /**
     * @return mixed
     */
    public function product_attribute_category()
    {
        return $this->belongsTo('Innovate\Eav\Category\ProductAttributeCategory', 'product_category_id');
    }

    /**
     * Returns Product Integer values If exist.
     *
     * @return mixed
     */
    public function product_int_attribute()
    {
        return $this->hasMany('Innovate\Eav\Value\ProductAttributeInt', 'product_attribute_id');
    }

    /**
     * Returns Product Text Values If exist.
     *
     * @return mixed
     */
    public function product_text_attribute()
    {
        return $this->hasMany('Innovate\Eav\Value\ProductAttributeText', 'product_attribute_id');
    }

    /**
     * Returns Product varchar Value If exist.
     *
     * @return mixed
     */
    public function product_varchar_attribute()
    {
        return $this->hasMany('Innovate\Eav\Value\ProductAttributeVarchar', 'product_attribute_id');
    }
}
