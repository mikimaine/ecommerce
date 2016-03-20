<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/19/2016
 * Time: 11:19 AM
 */

namespace Innovate\Repositories\Product;

use Innovate\Products\Product;

use Innovate\Eventing\EventGenerator;
use Innovate\Products\ProductWasArchived;
use Innovate\Products\ProductWasPosted;

class EloquentProductRepository implements ProductContract {

    use EventGenerator;

    protected $product;

    function __construct(Product $product)
    {
        $this->product = $product;
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
        // TODO: Implement getAllProducts() method.
    }

    /**
     * @param  $input
     * @param  $roles
     * @return mixed
     */
    public function create($input, $roles, $permissions)
    {
        // TODO: Implement create() method.
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
}