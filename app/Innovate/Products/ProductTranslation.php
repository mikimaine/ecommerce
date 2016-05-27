<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/22/2016
 * Time: 4:59 PM
 */

namespace Innovate\Products;


use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends \Spiritix\LadaCache\Database\Model {


    protected $table = 'product_translations';

    public $timestamps = true;
}