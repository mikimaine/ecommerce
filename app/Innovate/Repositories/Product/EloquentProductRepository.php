<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/19/2016
 * Time: 11:19 AM
 */

namespace Innovate\Repositories\Product;

use App\Exceptions\GeneralException;
use Exception;
use Innovate\Products\Product;

use Innovate\Eventing\EventGenerator;
use Innovate\Products\Events\ProductWasArchived;
use Innovate\Products\Events\ProductWasPosted;
use Innovate\Repositories\Eav\Value\EavValueIntContract;
use Innovate\Repositories\Eav\Value\EavValueTextContract;
use Innovate\Repositories\Eav\Value\EavValueVarcharContract;
use Innovate\Repositories\Product\ProductDescriptionContract;

class EloquentProductRepository implements ProductContract
{

    use EventGenerator;

    protected $product;
    /**
     * @var EavValueVarcharContract
     */
    private $varchar;
    /**
     * @var EavValueTextContract
     */
    private $text;
    /**
     * @var EavValueIntContract
     */
    private $int;


    private $productDescription;

    /**
     * @param Product $product
     * @param EavValueVarcharContract $varcharContract
     * @param EavValueTextContract $textContract
     * @param EavValueIntContract $intContract
     * @param ProductDescriptionContract $productDescriptionContract
     */
    function __construct(Product $product, EavValueVarcharContract $varcharContract, EavValueTextContract $textContract,
                         EavValueIntContract $intContract, ProductDescriptionContract $productDescriptionContract)
    {
        $this->product = $product;
        $this->varchar = $varcharContract;
        $this->text = $textContract;
        $this->int = $intContract;

        $this->productDescription = $productDescriptionContract;
    }


    /**
     * @param  $id
     * @param  bool $withRoles
     * @return mixed
     */
    public function findOrThrowException($id, $withRoles = false)
    {
        // TODO: Implement findOrThrowException() method.
    }

    /**
     * @param  $per_page
     * @param  string $order_by
     * @param  string $sort
     * @param  $status
     * @return mixed
     */
    public function getProductsPaginated($per_page, $status = 1, $order_by = 'id', $sort = 'asc')
    {
        // TODO: Implement getProductsPaginated() method.
    }

    /**
     * @param  $per_page
     * @return \Illuminate\Pagination\Paginator
     */
    public function getDeletedProductsPaginated($per_page)
    {
        // TODO: Implement getDeletedProductsPaginated() method.
    }

    /**
     * @param  string $order_by
     * @param  string $sort
     * @return mixed
     */
    public function getAllProducts($order_by = 'id', $sort = 'asc')
    {
        return Product::orderBy($order_by, $sort)->get();
    }

    /**
     * @param $input
     * @return mixed
     * @throws GeneralException
     * @internal param $roles
     */
    public function create($input)
    {

        $product = $this->createNonDownloadableStub($input);
        try {
            if ($product->save()) {
                // dd($input);
                $input['product_id'] = $product->id;
                $this->productDescription->create($input);
                $productLocal = $this->createNonDownloadableTranslationStub($input, $product);


                if ($productLocal->save()) {
                    foreach ($input as $key => $value) {
                        $new_string = explode('-', $key);
                        if (in_array('productAttributeVarchar', $new_string)) {

                            $this->varchar->createFromInput($product, $new_string, $value);
                        } elseif (in_array('productAttributeText', $new_string)) {

                            $this->text->createFromInput($product, $new_string, $value);
                        } elseif (in_array('productAttributeInt', $new_string)) {

                            $this->text->createFromInput($product, $new_string, $value);
                        }

                    }
                }


            }


            $this->raise(new ProductWasPosted($this->product));
            // var_dump($input);
            //return new Product();
            return $this;
        } catch (Exception $e) {
            //Do things with the Errors

        }
        throw new GeneralException('There was a problem creating this product. Please try again!'. $e);


    }

    /**
     * @param  $id
     * @param  $input
     * @param  $roles
     * @return mixed
     */
    public function update($id, $input, $roles, $permissions)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param  $id
     * @return mixed
     */
    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }

    /**
     * @param  $id
     * @return mixed
     */
    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param  $id
     * @return mixed
     */
    public function restore($id)
    {
        // TODO: Implement restore() method.
    }


    /**
     * @param $title
     * @param $description
     * @return $this
     */
    public function post($title, $description)
    {
        //$product = new Product();

        $this->product->title = $title;
        $this->product->description = $description;


        $this->product->save();

        $this->raise(new ProductWasPosted($this->product));

        return $this;
    }

    /**
     * @param $productId
     */
    public function archive($productId)
    {

        $product = $this->product->findOrFail($productId);
        $product->delete();
        $this->raise(new ProductWasArchived($product));

    }


    public function eagerLoadPaginated($per_page)
    {
        // $this->raise(new ProductWasPosted(new Product()));
        return Product::with('category', 'tax', 'product_attribute_category')->paginate($per_page);

    }

    private function createNonDownloadableStub($input)
    {
        $product = new Product();
        $product->img_big = 'path';//trim($input['valid_image']);
        $product->img_medium = 'path'; //trim($input['valid_image']);
        $product->img_small = 'path';//trim($input['valid_image']);
        $product->sku = trim($input['sku']);
        $product->currency = trim($input['currency']);
        $product->price = trim($input['price']);
        $product->previous_price = trim($input['previous_price']);
        $product->stock = trim($input['stock']);
        $product->location = trim($input['location']);
        $product->tax_id = trim($input['tax_id']);
        $product->is_downloadable = 0;
        $product->category_id = $input['parent_category'];
        $product->attribute_category_id = $input['product_category_id'];
        isset($input['status']) ? $product['live'] = 1 : $product['live'] = 0;
        isset($input['unlimited']) ? $product['unlimited'] = 1 : $product['unlimited'] = 0;
        //isset($input['parent_category']) ? $product->category_id = $input['parent_category'] : $product->category_id = NULL;

        return $product;
    }

    private function createNonDownloadableTranslationStub($input, $product)
    {
        $product->translateOrNew('en')->name = $input['name_en'];
        $product->translateOrNew('en')->cart_description = $input['cart_description_en'];
        $product->translateOrNew('en')->short_description = $input['short_description_en'];
        $product->translateOrNew('en')->long_description = $input['long_description_en'];


        isset($input['name_am']) ? $product->translateOrNew('en')->name = $input['name_am'] : 1;
        isset($input['cart_description_am']) ? $product->translateOrNew('en')->cart_description = $input['cart_description_en'] : 1;
        isset($input['short_description_am']) ? $product->translateOrNew('en')->short_description = $input['short_description_en'] : 1;
        isset($input['long_description_am']) ? $product->translateOrNew('en')->long_description = $input['long_description_en'] : 1;

        return $product;

    }
}