<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/25/2016
 * Time: 6:24 PM.
 */
namespace Innovate\WishList;

use Illuminate\Database\Eloquent\SoftDeletes;
use Innovate\BaseModel;

class WishList extends BaseModel
{
    use SoftDeletes;

    protected $table = 'wish_list';


    /**
     * For soft deletes.
     *
     * @var array
     */
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
}
