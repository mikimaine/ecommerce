<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/22/2016
 * Time: 5:25 PM
 */

namespace Innovate\Products\Traits\Relationship;


/**
 * Class ProductRelationship
 * @package Innovate\Products\Traits\Relationship
 */
trait ProductRelationship {


    /**
     * @return mixed
     */
    public function int_values()
    {
        return $this->hasMany('Innovate\Eav\Value\ProductAttributeInt','product_id');
    }

    /**
     * @return mixed
     */
    public function varchar_values()
    {
        return $this->hasMany('Innovate\Eav\Value\ProductAttributeVarchar','product_id');
    }

    /**
     * @return mixed
     */
    public function text_values()
    {
        return $this->hasMany('Innovate\Eav\Value\ProductAttributeText','product_id');
    }

    /**
     * @return mixed
     */
    public function tax()
    {
        return $this->belongsTo('Innovate\Taxs\Tax','tax_id');
    }


    /**
     * @return mixed
     */
    public function product_attribute_category()
    {
        return $this->belongsTo('Innovate\Eav\Category\ProductAttributeCategory','attribute_category_id');
    }


    /**
     * @return mixed
     */
    public function category()
    {
        return $this->belongsTo('Innovate\Category\Category','category_id');
    }

    /**
     *
     */
    public function order()
    {

    }

    /**
     *
     */
    public function wish_list()
    {

    }

    /**
     *
     */
    public function download()
    {

    }

}