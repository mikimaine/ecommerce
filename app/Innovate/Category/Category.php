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
<<<<<<< HEAD
use Innovate\Category\Traits\Attribute\CategoryAttribute;
use Innovate\SEOProvider\ObjectFlat;
=======
>>>>>>> 61cca9260d75f322faff49975dedaaa23a4b4fd6
use Innovate\Category\Traits\Relationship\CategoryRelationship;
use Innovate\SEOProvider\ObjectFlat;

/**
<<<<<<< HEAD
* Class Category
 * @package Innovate\Category
*/
class Category extends BaseModel implements ObjectFlat {
    use CategoryRelationship,CategoryAttribute;
=======
 * Class Category.
 */
class Category extends BaseModel implements ObjectFlat
{
    use CategoryRelationship;
>>>>>>> 61cca9260d75f322faff49975dedaaa23a4b4fd6

    protected $table = 'category';
}
