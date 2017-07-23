<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/22/2016
 * Time: 5:25 PM.
 */

namespace Innovate\Products\Traits\Relationship;

/**
 * Class ProductRelationship.
 */
trait ProductRelationship
{
    /**
     * Gets the description of the product.
     *
     * @return mixed
     */
    public function product_description()
    {
        return $this->hasOne('Innovate\Products\ProductDescription', 'product_id');
    }

    public function product_translations()
    {
        return   $this->hasMany('Innovate\Products\ProductTranslation', 'product_id');
    }

    /**
     * Gets attributes for the specified product_attribute_set.
     *
     * @return mixed
     */
    public function attributes()
    {
        return $this->hasManyThrough('Innovate\Eav\Attribute\ProductAttribute', 'Innovate\Eav\Category\ProductAttributeCategory',
                                     'attribute_category_id', 'product_category_id', 'id');
    }

    /**
     * @return mixed
     */
    public function int_values()
    {
        return $this->hasMany('Innovate\Eav\Value\ProductAttributeInt', 'product_id');
    }

    /**
     * @return mixed
     */
    public function varchar_values()
    {
        return $this->hasMany('Innovate\Eav\Value\ProductAttributeVarchar', 'product_id');
    }

    /**
     * @return mixed
     */
    public function text_values()
    {
        return $this->hasMany('Innovate\Eav\Value\ProductAttributeText', 'product_id');
    }

    /**
     * @return mixed
     */
    public function tax()
    {
        return $this->belongsTo('Innovate\Taxs\Tax', 'tax_id');
    }

    /**
     * @return mixed
     */
    public function product_attribute_category()
    {
        return $this->belongsTo('Innovate\Eav\Category\ProductAttributeCategory', 'attribute_category_id');
    }

    /**
     * @return mixed
     */
    public function category()
    {
        return $this->belongsTo('Innovate\Category\Category', 'category_id');
    }

    public function order()
    {
    }

    public function wish_list()
    {
    }

    public function download()
    {
    }
}
