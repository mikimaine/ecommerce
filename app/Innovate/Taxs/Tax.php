<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 1:33 PM
 */

namespace Innovate\Taxs;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * @package Innovate\Products
 */
class Tax extends Model {




    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tax';

    /**
     * @var array
     */
    protected  $fillable = ['name','rate'];




}