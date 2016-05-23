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
use Illuminate\Http\Request;
use Innovate\Eav\Value\ProductAttributeInt;
use Innovate\Eav\Value\ProductAttributeText;
use Innovate\Eav\Value\ProductAttributeVarchar;
use Innovate\Products\PostProductCommand;
use Illuminate\Support\Facades\Input;
use Innovate\Products\ProductSoldCommand;
use Innovate\Repositories\Category\CategoryContract;
use Innovate\Repositories\Eav\Attribute\EavAttributeContract;
use Innovate\Repositories\Eav\Category\EavCategoryContract;
use Innovate\Repositories\Product\ProductContract;
use Innovate\Repositories\Tax\TaxContract;

/**
 * Class ProductController
 * @package app\Http\Controllers\Product\Backend
 */
class ProductController extends CommandsDomainEventController{

    private $product;

    private $category;

    private $eavAttributeCategory;

    private $eavAttribute;

    private $tax;
    public function __construct(ProductContract $productContract,CategoryContract $categoryContract ,
                                EavCategoryContract $eavCategoryContract, EavAttributeContract $attributeContract,
                                TaxContract $taxContract)
    {
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

    /**
     * @param Request $request
     */
    public function store(Request $request)
    {

            foreach($request->all() as $key => $value){
                $new_string = explode('-', $key);
                if(in_array('productAttributeVarchar',$new_string)) {
                    $varchar = new ProductAttributeVarchar();
                    $varchar->product_id = 1;
                    $varchar->product_attribute_id = $new_string[2];
                    $varchar->value = $value;
                    echo '<pre>' .print_r($varchar).'</pre>';
                    echo '<br />';
                }elseif(in_array('productAttributeText',$new_string)){
                    $text    = new ProductAttributeText();
                    $text->product_id = 1;
                    $text->product_attribute_id = $new_string[2];
                    $text->value = $value;
                    echo '<pre>' . print_r($text).'</pre>';
                    echo '<br />';
                }elseif(in_array('productAttributeInt',$new_string)){
                    $int     = new ProductAttributeInt();
                    $int->product_id = 1;
                    $int->product_attribute_id = $new_string[2];
                    $int->value = $value;
                    echo '<pre>' . print_r($int).'</pre>';
                    echo '<br />';
                }

            }


         /*$input = Input::only('title','description');
         $command = new PostProductCommand($input['title'],$input['description']);
         $this->commandBus->execute($command);
    */

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