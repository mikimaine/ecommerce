<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/25/2016
 * Time: 6:36 PM.
 */

namespace Innovate\Customer;

use Innovate\BaseModel;

class customer extends BaseModel
{
    protected $table = 'customer_detail';

    protected $dates = ['created_at', 'updated_at'];
}
