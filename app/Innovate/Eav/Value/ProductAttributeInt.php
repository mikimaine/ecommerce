<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/22/2016
 * Time: 3:37 PM.
 */

namespace Innovate\Eav\Value;

use Innovate\BaseModel;
use Innovate\Eav\Value\Traits\Relationship\ProductAttributeIntRelationship;

class ProductAttributeInt extends BaseModel
{
    use ProductAttributeIntRelationship;

    protected $table = 'product_attribute_int';

    /**
     * @var array
     */
    protected $fillable = ['product_id', 'product_attribute_id', 'value'];
}
