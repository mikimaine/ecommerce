<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/2/2016
 * Time: 10:57 AM
 */

namespace Innovate\Category;


use Innovate\SEOProvider\ObjectFlat;
use Illuminate\Database\Eloquent\Model;
use Innovate\Category\Traits\Relationship\CategoryRelationship;

/**
* Class Category
 * @package Innovate\Category
*/
class Category extends \Spiritix\LadaCache\Database\Model implements ObjectFlat {
    use CategoryRelationship;

    protected $table = 'category';

}