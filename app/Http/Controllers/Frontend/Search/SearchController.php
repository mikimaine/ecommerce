<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/23/2016
 * Time: 7:32 AM.
 */

namespace app\Http\Controllers\Frontend\Search;

use App\Http\Controllers\Controller;
use Caffeinated\Themes\Facades\Theme;
use Innovate\Repositories\Product\ProductContract;

/**
 * Class SearchController.
 */
class SearchController extends Controller
{
    /**
     * Holds the product model.
     *
     * @var
     */
    private $products;

    /**
     * @param ProductContract $products
     */
    public function __construct(ProductContract $products)
    {
        $this->products = $products;
    }

    /**
     * Search for products.
     */
    public function index()
    {
        $search_term = \Input::get('q');
      //  if($search_term == ''){
           // return redirect()->back()->with('flash_error', 'No search input');
      //  }
        return Theme::view('frontend.search.search_result')
            ->withResults($this->products->search($search_term));
    }
}
