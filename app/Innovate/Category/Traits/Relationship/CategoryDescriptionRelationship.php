<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/2/2016
 * Time: 12:17 PM
 */

namespace Innovate\Category\Traits\Relationship;


trait CategoryDescriptionRelationship {

    public function category_description_translations()
    {
        return   $this->hasMany('Innovate\Category\CategoryDescriptionTranslation','category_description_id');

       /* $this->hasManyThrough(
            'Innovate\Category\CategoryDescriptionTranslation', 'Innovate\Category\CategoryDescription',
            'category_id', 'category_description_id	', 'id'
        );*/
    }
}