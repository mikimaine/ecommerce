<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/19/2016
 * Time: 11:19 AM.
 */
namespace Innovate\Repositories\Product;

use App\Exceptions\GeneralException;
use DB;
use Exception;
use Illuminate\Support\Str;
use Innovate\Eventing\EventGenerator;
use Innovate\Products\Events\ProductWasPosted;
use Innovate\Products\Product;
use Innovate\Products\ProductDownload;
use Innovate\Repositories\Eav\Value\EavValueIntContract;
use Innovate\Repositories\Eav\Value\EavValueTextContract;
use Innovate\Repositories\Eav\Value\EavValueVarcharContract;

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
     * @param Product                    $product
     * @param EavValueVarcharContract    $varcharContract
     * @param EavValueTextContract       $textContract
     * @param EavValueIntContract        $intContract
     * @param ProductDescriptionContract $productDescriptionContract
     */
    public function __construct(Product $product, EavValueVarcharContract $varcharContract, EavValueTextContract $textContract,
                         EavValueIntContract $intContract, ProductDescriptionContract $productDescriptionContract)
    {
        $this->product = $product;
        $this->varchar = $varcharContract;
        $this->text = $textContract;
        $this->int = $intContract;

        $this->productDescription = $productDescriptionContract;
    }

    /**
     * @param $id
     * @param bool $withRoles
     *
     * @throws GeneralException
     *
     * @return mixed
     */
    public function findOrThrowException($id, $withRoles = false)
    {
        $product = Product::withTrashed()->find($id);

        if (!is_null($product)) {
            return $product;
        }

        //throw new GeneralException('ThatProduct does not exist.');
    }

    /**
     * @param  $per_page
     * @param string $order_by
     * @param string $sort
     * @param  $status
     *
     * @return mixed
     */
    public function getProductsPaginated($per_page, $status = 1, $order_by = 'id', $sort = 'asc')
    {
        // TODO: Implement getProductsPaginated() method.
    }

    /**
     * @param  $per_page
     *
     * @return \Illuminate\Pagination\Paginator
     */
    public function getDeletedProductsPaginated($per_page)
    {
        // TODO: Implement getDeletedProductsPaginated() method.
    }

    /**
     * @param string $order_by
     * @param string $sort
     *
     * @return mixed
     */
    public function getAllProducts($order_by = 'id', $sort = 'asc')
    {
        return Product::orderBy($order_by, $sort)->get();
    }

    /**
     * This Starts a Database Transaction and insert NON Downloadable data to there specific Entity's
     * If any thing goes wrong every thing will be rollback.
     *
     * @param $input
     *
     * @throws GeneralException
     *
     * @return mixed
     *
     * @internal param $roles
     */
    public function create($input)
    {
        DB::beginTransaction();
        $product = $this->createNonDownloadableStub($input);
        try {
            if ($product->save()) {
                // dd($input);
                $input['product_id'] = $product->id;
                if (!$this->productDescription->create($input)) {
                    DB::rollback();
                }
                $productLocal = $this->createTranslationStub($input, $product);
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
                } else {
                    DB::rollback();
                    throw new GeneralException('There was a problem Saving Downloadable product Local.Please try again!');
                }
            }
            $this->raise(new ProductWasPosted($this->product));
            DB::commit();

            return $this;
        } catch (Exception $e) {
            DB::beginTransaction();
            DB::beginTransaction();
            DB::beginTransaction();
        }
        throw new GeneralException('There was a problem creating this product. Please try again!'.$e);
    }

    /**
     * This Starts a Database Transaction and insert Downloadable data to there specific Entity's
     * If any thing goes wrong every thing will be rollback.
     *
     * @param $input
     *
     * @throws GeneralException
     *
     * @return mixed
     */
    public function createDownloadable($input)
    {
        DB::beginTransaction();
        $product = $this->createDownloadableStub($input);
        try {
            // Try to save the product model
            if ($product->save()) {
                $input['product_id'] = $product->id;
                $download = $this->createDownloadStub($input, $product);
         // Try to save both download file info and Product description Model
                if (!$download->save() || !$this->productDescription->create($input)) {
                    DB::rollback();
                } else {
                    throw new GeneralException('There was a problem creating Downloadable product. Please try again!');
                }
                $productLocal = $this->createTranslationStub($input, $product);
         // Try to save Local information of the product
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
                } else {
                    DB::rollback();
                    throw new GeneralException('There was a problem Saving Downloadable product Local.Please try again!');
                }
            }


            $this->raise(new ProductWasPosted($this->product));

            DB::commit();
         // Raise a new Event that tell product was posted

            $this->raise(new ProductWasPosted($this->product));


            return $this;
        } catch (Exception $e) {
            DB::rollback();
        }
        throw new GeneralException('There was a problem creating this product. Please try again!'.$e);
    }

    public function search($search_term)
    {
        return Product::search($search_term)->get();
    }

    /**
     * @param  $id
     * @param  $input
     * @param  $roles
     *
     * @return mixed
     */
    public function update($id, $input, $roles, $permissions)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param $id
     *
     * @throws GeneralException
     *
     * @return mixed
     */
    public function destroy($id)
    {
        $product = $this->findOrThrowException($id);
        //dd($product);
        if ($product->delete()) {
            return true;
        }

        throw new GeneralException('There was a problem deleting this Product. Please try again.');
    }

    /**
     * @param  $id
     *
     * @return mixed
     */
    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param  $id
     *
     * @return mixed
     */
    public function restore($id)
    {
        // TODO: Implement restore() method.
    }

    public function eagerLoadPaginated($per_page)
    {
        // $this->raise(new ProductWasPosted(new Product()));

        return Product::with(['category', 'tax', 'product_attribute_category', 'varchar_values', 'text_values', 'int_values', 'product_translations' => function ($query) {
            $query->where('product_translations.locale', '=', App::getLocale());
        }])->paginate($per_page);
    }

    public function eagerLoadWhere($table, $product_id)
    {
        // $this->raise(new ProductWasPosted(new Product()));
        return Product::with(['category', 'tax', 'product_attribute_category', 'varchar_values', 'text_values', 'int_values', 'product_translations' => function ($query) {
            //$query->orderBy('product.id', $product_id);
            $query->where('product_translations.locale', '=', App::getLocale());
        }])->find($product_id);
    }

    private function createNonDownloadableStub($input)
    {
        $product = new Product();
        $product->img_big = trim($input['valid_image']);
        $product->img_medium = trim($input['valid_image']);
        $product->img_small = trim($input['valid_image']);
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

    /**
     * @param $input
     *
     * @return Product
     */
    private function createDownloadableStub($input)
    {
        $product = new Product();
        $product->img_big = trim($input['valid_image']);
        $product->img_medium = trim($input['valid_image']);
        $product->img_small = trim($input['valid_image']);
        $product->sku = trim($input['sku']);
        $product->currency = trim($input['currency']);
        $product->price = trim($input['price']);
        $product->previous_price = trim($input['previous_price']);
        $product->stock = null;
        $product->unlimited = 1;
        $product->location = trim($input['location']);
        $product->tax_id = trim($input['tax_id']);
        $product->is_downloadable = 1;
        $product->category_id = $input['parent_category'];
        $product->attribute_category_id = $input['product_category_id'];
        isset($input['status']) ? $product['live'] = 1 : $product['live'] = 0;

        return $product;
    }

    private function createTranslationStub($input, $product)
    {
        $product->translateOrNew('en')->name = $input['name_en'];
        $product->translateOrNew('en')->cart_description = $input['cart_description_en'];
        $product->translateOrNew('en')->short_description = $input['short_description_en'];
        $product->translateOrNew('en')->long_description = $input['long_description_en'];


        isset($input['name_am']) ? $product->translateOrNew('am')->name = $input['name_am'] : 1;
        isset($input['cart_description_am']) ? $product->translateOrNew('am')->cart_description = $input['cart_description_am'] : 1;
        isset($input['short_description_am']) ? $product->translateOrNew('am')->short_description = $input['short_description_am'] : 1;
        isset($input['long_description_am']) ? $product->translateOrNew('am')->long_description = $input['long_description_am'] : 1;

        return $product;
    }

    private function createDownloadStub($input, $product)
    {
        $download = new ProductDownload();
        $download->product_id = $product->id;
        $download->filename = $input['valid_file'];
        $download->mask = Str::random(16).sha1($input['valid_file']);

        return $download;
    }

    public function eagerLoad($table, $order_by = 'id', $sort = 'asc')
    {
        return Category::with(['category_description.category_description_translations' => function ($query) {
            $query->orderBy('id', 'asc');
            $query->where('category_description_translations.locale', '=', App::getLocale());
        }])->get();
    }
}
