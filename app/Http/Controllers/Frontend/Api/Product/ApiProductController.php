<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/8/2016
 * Time: 10:50 PM
 */

namespace App\Http\Controllers\Frontend\Api\Product;

use App\Exceptions\GeneralException;
use App\Http\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;
use Innovate\Api\Transformers\ProductTransformer;
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

/**
 * Class ProductController
 * @package app\Http\Controllers\Product\Backend
 */
class ApiProductController extends ApiController
{

    /**
     * @var ProductContract
     */
    protected $product;

    /**
     * @var CategoryContract
     */
    protected $category;

    /**
     * @var EavCategoryContract
     */
    protected $eavAttributeCategory;

    /**
     * @var EavAttributeContract
     */
    protected $eavAttribute;

    /**
     * @var TaxContract
     */
    protected $tax;

    /**
     * @var InnovateImageUploadContract
     */
    protected $imageDriver;


    /**
     * @var ProductTransformer
     */
    protected $productTransformer;

    /**
     * @param ProductContract $productContract
     * @param CategoryContract $categoryContract
     * @param EavCategoryContract $eavCategoryContract
     * @param EavAttributeContract $attributeContract
     * @param TaxContract $taxContract
     * @param InnovateImageUploadContract $image
     * @param ProductTransformer $productTransformer
     */
    public function __construct(ProductContract $productContract, CategoryContract $categoryContract,
                                EavCategoryContract $eavCategoryContract, EavAttributeContract $attributeContract,
                                TaxContract $taxContract, InnovateImageUploadContract $image, ProductTransformer $productTransformer)
    {

        $this->product = $productContract;

        $this->category = $categoryContract;

        $this->eavAttributeCategory = $eavCategoryContract;

        $this->eavAttribute = $attributeContract;

        $this->tax = $taxContract;

        $this->imageDriver = $image;

        $this->productTransformer = $productTransformer;

        //  $this->beforeFilter('auth.basic');
    }

    public function index()
    {
        $products = $this->product->eagerLoadPaginated(10);

        if (!$products) {
            return $this->respondNotFound('No Product Found');

        }

        return $this->respondWithPagination($products,['data' => $this->productTransformer->transformCollection($products->toArray())]);

    }

    public function show($id)
    {
        $products = $this->product->findOrThrowException($id);

        if (!$products) {
            return $this->respondNotFound('This Product Not Found');
        }
            return $this->respond([
                'data' => $this->productTransformer->transform($products->toArray())
            ]);



    }


    public function create()
    {
        return view('backend.product.create')
            ->withEavcategorys($this->eavAttributeCategory->getAllEavCategory());
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws GeneralException
     */
    public function newProduct(Request $request)
    {
        if ($request['product_type'] == 'downloadable') {
            $a = $this->category->eagerLoad('category_description');
            //   dd($a);
            return view('backend.product.create_downloadable')
                ->withCategory($request['product_category_id'])
                ->withEavcategorys($this->eavAttributeCategory->getAllEavCategory())
                ->withAttributes($this->eavAttribute->getWhereCategory($request['product_category_id']))
                ->withCategorys($this->category->eagerLoad('category_description'))
                ->withTaxs($this->tax->getAll());

        } elseif ($request['product_type'] == 'non-downloadable') {

            return view('backend.product.create_non_downloadable')
                ->withCategory($request['product_category_id'])
                ->withEavcategorys($this->eavAttributeCategory->getAllEavCategory())
                ->withAttributes($this->eavAttribute->getWhereCategory($request['product_category_id']))
                ->withCategorys($this->category->eagerLoad('category_description'))
                ->withTaxs($this->tax->getAll());
        }

        throw new GeneralException('Select proper Product Type and Try again!');
    }

    /**
     * @param Request $request
     * @param CommandBus $commandBus
     * @throws GeneralException
     */
    public function storeDownloadable(Request $request, CommandBus $commandBus)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            //check if the image file is valid
            if (!$file->isValid()) {
                throw new GeneralException('There is error in your image file.');
            }
            //pass the image along with the path to the upload to the imageDriver for further processing
            $im = $this->imageDriver->up($file, config('innovate.upload_path') . DS . 'product' . DS . Str::random(32) . '.' . $file->guessExtension());
            $all = $request->all();
            $all['valid_image'] = $im->basename;

            //Fire the command
            $command = new PostDownloadableProductCommand($all);
            $commandBus->execute($command);
        }
        throw new GeneralException('Fatal Error: 42  Innovate E-commerce encountered unknown error.Please  Try again!');
    }

    /**
     * @param StoreProductRequest $request
     * @param CommandBus $commandBus
     * @throws GeneralException
     */
    public function storeNonDownloadable(StoreProductRequest $request, CommandBus $commandBus)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            //check if the image file valid
            if (!$file->isValid()) {
                throw new GeneralException('There is error in your image file.');
            }
            //pass the image along with the path to the upload to the imageDriver for further processing
            $im = $this->imageDriver->up($file, config('innovate.upload_path') . DS . 'product' . DS . Str::random(32) . '.' . $file->guessExtension());
            $all = $request->all();
            $all['valid_image'] = $im->basename;

            //Fire the command
            $command = new PostNonDownloadableProductCommand($all);
            $commandBus->execute($command);
        }

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