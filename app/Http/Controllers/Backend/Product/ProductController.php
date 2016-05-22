<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 12:44 PM
 */

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\CommandsDomainEventController;
use App\Http\Requests\Request;
use Innovate\Products\PostProductCommand;
use Illuminate\Support\Facades\Input;
use Innovate\Products\ProductSoldCommand;
use Innovate\Repositories\Category\CategoryContract;
use Innovate\Repositories\Product\ProductContract;

/**
 * Class ProductController
 * @package app\Http\Controllers\Product\Backend
 */
class ProductController extends CommandsDomainEventController{

    private $product;

    private $category;
    public function __construct(ProductContract $productContract,CategoryContract $categoryContract)
    {
        $this->product = $productContract;

        $this->category = $categoryContract;
    }

    public function index()
    {

        return view('backend.product.index')
               ->withProducts($this->product->eagerLoadPaginated(10));
             //  return view('backend.product.index')
             //  ->withProducts($this->product->getAllProducts());

    }

    public function create()
    {

    }

    public function newProduct($attributeSet,$productType,Request $request)
    {


    }


    /**
     *
     */
    public function store()
    {
         $input = Input::only('title','description');
         $command = new PostProductCommand($input['title'],$input['description']);
         $this->commandBus->execute($command);
    }

    /**
     * @param $productId
     */
    public function delete($productId)
    {
        $command = new ProductSoldCommand($productId);
        $this->commandBus->execute($command);
    }

}