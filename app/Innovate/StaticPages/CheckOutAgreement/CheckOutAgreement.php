<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 1:33 PM.
 */

namespace Innovate\StaticPages\CheckOutAgreement;

use Illuminate\Database\Eloquent\SoftDeletes;
use Innovate\BaseModel;
use Innovate\StaticPages\CheckOutAgreement\Traits\Attribute\CheckOutAgreementAttribute;

/**
 * Class Product.
 */
class CheckOutAgreement extends BaseModel
{
    use CheckOutAgreementAttribute,SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'check_out_agreement';

    /**
     * @var array
     */
    protected $fillable = ['name', 'content', 'is_active'];

    /**
     * For soft deletes.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
