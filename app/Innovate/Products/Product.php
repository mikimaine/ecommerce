<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 1:33 PM
 */

namespace Innovate\Products;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Innovate\Products\Traits\Relationship\ProductRelationship;
use Innovate\SEOProvider\ObjectFlat;

/**
 * Class Product
 * @package Innovate\Products
 */
class Product extends Model implements ObjectFlat{

    use Translatable,ProductRelationship;

    /**
     * The translation model for product
     * @var string
     */
    public $translationModel = 'Innovate\Products\ProductTranslation';


    /**
     * The translated attributes in this model
     * @var array
     */
    public $translatedAttributes = ['name', 'cart_description','short_description','long_description'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * @var array
     */
 //   protected  $fillable = ['title','description'];




}