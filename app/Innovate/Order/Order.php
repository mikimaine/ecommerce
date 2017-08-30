<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/25/2016
 * Time: 6:41 PM.
 */

namespace Innovate\Order;

use Illuminate\Database\Eloquent\SoftDeletes;
use Innovate\BaseModel;
use Innovate\Order\Traits\Attribute\OrderAttribute;
use Innovate\Order\Traits\Relationship\OrderRelationship;

class Order extends BaseModel
{
    use SoftDeletes,OrderAttribute,OrderRelationship;

    protected $table = 'order';

    /**
     * For soft deletes.
     *
     * @var array
     */
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
}
