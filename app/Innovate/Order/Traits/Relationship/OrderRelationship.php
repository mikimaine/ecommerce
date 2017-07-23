<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/26/2016
 * Time: 11:01 PM.
 */

namespace Innovate\Order\Traits\Relationship;

trait OrderRelationship
{
    /**
     * Returns Product Integer values If exist.
     *
     * @return mixed
     */
    public function product()
    {
        return $this->belongsTo('Innovate\Products\Product', 'product_id');
    }
}
