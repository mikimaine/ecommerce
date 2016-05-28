<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 1:33 PM
 */

namespace Innovate\StaticPages\BankTransferInfo;

use Illuminate\Database\Eloquent\SoftDeletes;
use Innovate\BaseModel;
use Innovate\StaticPages\BankTransferInfo\Traits\Attribute\BankInfoAttribute;

/**
 * Class Product
 * @package Innovate\Products
 */
class BankTransferInfo extends BaseModel {

    use BankInfoAttribute,SoftDeletes;


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bank_transfer_info';

    /**
     * @var array
     */
    protected  $fillable = ['bank_name','bank_account_no','support_phone','description'];


    /**
     * For soft deletes
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

}