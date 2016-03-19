<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 1:33 PM
 */

namespace Innovate\Products;


use Innovate\Eventing\EventGenerator;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * @package Innovate\Products
 */
class Product extends Model {




    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product';

    /**
     * @var array
     */
    protected  $fillable = ['title','description'];




}