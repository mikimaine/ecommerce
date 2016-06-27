<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/2/2016
 * Time: 10:57 AM
 */

namespace Innovate\Category;


use Innovate\BaseModel;
use Innovate\Category\Traits\Attribute\CategoryAttribute;
use Innovate\SEOProvider\ObjectFlat;
use Innovate\Category\Traits\Relationship\CategoryRelationship;

/**
* Class Category
 * @package Innovate\Category
*/
class Category extends BaseModel implements ObjectFlat {
    use CategoryRelationship,CategoryAttribute;

    protected $table = 'category';

}