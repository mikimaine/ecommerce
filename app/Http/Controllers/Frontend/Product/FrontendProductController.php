<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/8/2016
 * Time: 10:50 PM
 */

namespace App\Http\Controllers\Frontend\Product;

use App\Exceptions\GeneralException;
use App\Http\Controllers\CommandsDomainEventController;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Innovate\Image\InnovateImageUploadContract;
use Innovate\Commanding\CommandBus;
use Innovate\Products\PostDownloadableProductCommand;
use Innovate\Products\PostNonDownloadableProductCommand;
use Innovate\Products\ProductSoldCommand;
use Innovate\Repositories\Category\CategoryContract;
use Innovate\Repositories\Eav\Attribute\EavAttributeContract;
use Innovate\Repositories\Eav\Category\EavCategoryContract;
use Innovate\Repositories\Product\ProductContract;
use Innovate\Repositories\Tax\TaxContract;
use Innovate\Requests\product\StoreProductRequest;
use Theme;

/**
 * Class ProductController
 * @package app\Http\Controllers\Product\Backend
 */
class FrontendProductController extends CommandsDomainEventController
{

    /**
     * @var ProductContract
     */
    private $product;

    /**
     * @var CategoryContract
     */
    private $category;

    /**
     * @var EavCategoryContract
     */
    private $eavAttributeCategory;

    /**
     * @var EavAttributeContract
     */
    private $eavAttribute;

    /**
     * @var TaxContract
     */
    private $tax;

    /**
     * @var InnovateImageUploadContract
     */
    public $imageDriver;

    /**
     * @param ProductContract $productContract
     * @param CategoryContract $categoryContract
     * @param EavCategoryContract $eavCategoryContract
     * @param EavAttributeContract $attributeContract
     * @param TaxContract $taxContract
     * @param InnovateImageUploadContract $image
     */
    public function __construct(ProductContract $productContract, CategoryContract $categoryContract,
                                EavCategoryContract $eavCategoryContract, EavAttributeContract $attributeContract,
                                TaxContract $taxContract, InnovateImageUploadContract $image)
    {

        $this->product = $productContract;

        $this->category = $categoryContract;

        $this->eavAttributeCategory = $eavCategoryContract;

        $this->eavAttribute = $attributeContract;

        $this->tax = $taxContract;

        $this->imageDriver = $image;

    }

    public function index()
    {
        return Theme::view('frontend.product.index')
               ->withProducts($this->product->eagerLoadPaginated(10));
        //  return view('backend.product.index')
        //  ->withProducts($this->product->getAllProducts());

    }

    public function create()
    {
        return view('backend.product.create')
            ->withEavcategorys($this->eavAttributeCategory->getAllEavCategory())  ;
    }

    public function show($id)
    {
        //dd($this->product->eagerLoadWhere('',$id));
        return Theme::view('frontend.product.show')
            ->withProduct($this->product->eagerLoadWhere('',$id))
            ->withProducts($this->product->eagerLoadPaginated(10));
    }







}