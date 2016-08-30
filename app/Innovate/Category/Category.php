<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/2/2016
 * Time: 10:57 AM.
 */
namespace Innovate\Category;

use Innovate\BaseModel;
use Innovate\Category\Traits\Relationship\CategoryRelationship;
use Innovate\SEOProvider\ObjectFlat;

/**
 * Class Category.
 */
class Category extends BaseModel implements ObjectFlat
{
    use CategoryRelationship;


    protected $table = 'category';
}
