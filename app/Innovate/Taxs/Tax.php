<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 1:33 PM.
 */
namespace Innovate\Taxs;

use Illuminate\Database\Eloquent\Model;
use Innovate\BaseModel;
use Innovate\Taxs\Traits\Attribute\TaxAttribute;

/**
 * Class Product.
 */
class Tax extends BaseModel
{
    use TaxAttribute;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tax';

    /**
     * @var array
     */
    protected $fillable = ['name', 'rate'];
}
