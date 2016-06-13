<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/2/2016
 * Time: 12:17 PM.
 */
namespace Innovate\Category\Traits\Relationship;

trait CategoryRelationship
{
    public function category_description()
    {
        return $this->hasOne('Innovate\Category\CategoryDescription', 'category_id');
    }
}
