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
use Innovate\Products\Product;
use Innovate\Products\ProductDescription;

class EloquentProductDescriptionRepository implements ProductDescriptionContract
{
    /**
     * @param  $id
     * @param bool $withRoles
     *
     * @return mixed
     */
    public function findOrThrowException($id, $withRoles = false)
    {
        // TODO: Implement findOrThrowException() method.
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
        $productDescription = $this->createStub($input);
        try {
            if ($productDescription->save()) {
                return true;
            }
        } catch (GeneralException $e) {
        }
        throw new GeneralException('There was a problem when trying to save product Meta information');
    }

    /**
     * @param $id
     * @param $input
     *
     * @return mixed
     *
     * @internal param $roles
     */
    public function update($id, $input)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param  $id
     *
     * @return mixed
     */
    public function destroy($id)
    {
        // TODO: Implement destroy() method.
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

    private function createStub($input)
    {
        $productDescription = new ProductDescription();
        $productDescription->product_id = trim($input['product_id']);
        $productDescription->meta_title = trim($input['meta_title']);
        $productDescription->meta_description = trim($input['meta_description']);

        return $productDescription;
    }

    /**
     * @param  $per_page
     * @param string $order_by
     * @param string $sort
     *
     * @return mixed
     *
     * @internal param $status
     */
    public function Paginated($per_page, $order_by = 'id', $sort = 'asc')
    {
        // TODO: Implement Paginated() method.
    }

    /**
     * @param string $order_by
     * @param string $sort
     *
     * @return mixed
     */
    public function getAll($order_by = 'id', $sort = 'asc')
    {
        // TODO: Implement getAll() method.
    }
}
