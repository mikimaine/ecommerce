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
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Innovate\Commanding\CommandBus;
use Innovate\Eav\Value\ProductAttributeInt;
use Innovate\Eav\Value\ProductAttributeText;
use Innovate\Eav\Value\ProductAttributeVarchar;
use Innovate\Products\PostNonDownloadableProductCommand;
use Innovate\Products\ProductSoldCommand;
use Innovate\Repositories\Category\CategoryContract;
use Innovate\Repositories\Eav\Attribute\EavAttributeContract;
use Innovate\Repositories\Eav\Category\EavCategoryContract;
use Innovate\Repositories\Product\ProductContract;
use Innovate\Repositories\Tax\TaxContract;
use Innovate\Requests\product\StoreProductRequest;

/**
 * Class ProductController
 * @package app\Http\Controllers\Product\Backend
 */
class ProductController extends Controller{

    private $product;

    private $category;

    private $eavAttributeCategory;

    private $eavAttribute;

    private $tax;

    public function __construct(ProductContract $productContract,CategoryContract $categoryContract ,
                                EavCategoryContract $eavCategoryContract, EavAttributeContract $attributeContract,
                                TaxContract $taxContract)
    {
        // parent::__construct();
        $this->product = $productContract;

        $this->category = $categoryContract;

        $this->eavAttributeCategory = $eavCategoryContract;

        $this->eavAttribute = $attributeContract;

        $this->tax = $taxContract;

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
        return view('backend.product.create')
            ->withEavcategorys($this->eavAttributeCategory->getAllEavCategory());
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function newProduct(Request $request)
    {
         if($request['product_type'] == 'downloadable'){

             return view('backend.product.create_downloadable');

         }elseif($request['product_type'] == 'non-downloadable'){

             return view('backend.product.create_non_downloadable')
                 ->withCategory($request['product_category_id'])
                 ->withEavcategorys($this->eavAttributeCategory->getAllEavCategory())
                 ->withAttributes($this->eavAttribute->getWhereCategory($request['product_category_id']))
                 ->withCategorys($this->category->eagerLoad('category_description'))
                 ->withTaxs($this->tax->getAll());
         }
    }

    public function storeDownloadable(Request $request)
    {
        dd($request->all());
    }

    /**
     * @param StoreProductRequest $request
     * @param CommandBus $commandBus
     */
    public function storeNonDownloadable(StoreProductRequest $request,CommandBus $commandBus)
    {

       $command = new PostNonDownloadableProductCommand($request->all());
      //  dd($this->commandBus);
        //dd($command->input);
      $commandBus->execute($command);





    }

            /**
             * @param Request|StoreProductRequest $request
             */
    public function store(StoreProductRequest $request)
    {




       /*  $input = Input::only('title','description');
         $command = new PostProductCommand($input['title'],$input['description']);
         $this->commandBus->execute($command);
*/

         }

    /**
     * @param $productId
     */
    public function delete($productId)
    {
        dd($productId);
        $command = new ProductSoldCommand($productId);
        $this->commandBus->execute($command);
    }

}