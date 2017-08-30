<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/19/2016
 * Time: 11:15 AM.
 */

namespace Innovate\Repositories\Product;

/**
 * Interface ProductContract.
 */
interface ProductContract
{
    /**
     * @param  $id
     * @param bool $withRoles
     *
     * @return mixed
     */
    public function findOrThrowException($id, $withRoles = false);

    /**
     * @param  $per_page
     * @param string $order_by
     * @param string $sort
     * @param  $status
     *
     * @return mixed
     */
    public function getProductsPaginated($per_page, $status = 1, $order_by = 'id', $sort = 'asc');

    /**
     * @param  $per_page
     *
     * @return \Illuminate\Pagination\Paginator
     */
    public function getDeletedProductsPaginated($per_page);

    /**
     * @param string $order_by
     * @param string $sort
     *
     * @return mixed
     */
    public function getAllProducts($order_by = 'id', $sort = 'asc');

    /**
     * @param  $input
     *
     * @return mixed
     */
    public function create($input);

    /**
     * @param $input
     *
     * @return mixed
     */
    public function createDownloadable($input);

    /**
     * @param  $id
     * @param  $input
     * @param  $roles
     *
     * @return mixed
     */
    public function update($id, $input, $roles, $permissions);

    /**
     * @param  $id
     *
     * @return mixed
     */
    public function destroy($id);

    /**
     * @param  $id
     *
     * @return mixed
     */
    public function delete($id);

    /**
     * @param  $id
     *
     * @return mixed
     */
    public function restore($id);
}
