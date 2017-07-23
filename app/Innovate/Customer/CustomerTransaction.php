<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/25/2016
 * Time: 6:39 PM.
 */

namespace Innovate\Customer;

use Illuminate\Database\Eloquent\SoftDeletes;
use Innovate\BaseModel;

/**
 * @property  amount
 * @property  description
 * @property  customer_id
 * @property  order_id
 */
class CustomerTransaction extends BaseModel
{
    use SoftDeletes;

    protected $table = 'customer_transaction';

    /**
     * For soft deletes.
     *
     * @var array
     */
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
}
