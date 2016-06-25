<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/23/2016
 * Time: 7:32 AM
 */

namespace app\Http\Controllers\Frontend\Search;


use App\Http\Controllers\Controller;

/**
 * Class SearchController
 * @package app\Http\Controllers\Frontend\Search
 */
class SearchController extends Controller {

    /**
     * Holds the product model
     * @var
     */
    private $products ;

    function __construct($products)
    {
        $this->products = $products;
    }

    /**
     * Search for products
     */
    public function index()
    {

    }

}