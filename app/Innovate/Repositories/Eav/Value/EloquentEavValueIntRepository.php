<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/22/2016
 * Time: 3:59 PM
 */

namespace Innovate\Repositories\Eav\Value;


/**
 * Class EloquentEavValueIntRepository
 * @package Innovate\Repositories\Eav\Value
 */
class EloquentEavValueIntRepository implements EavValueContract{

    /**
     * @param  $id
     * @return mixed
     * @internal param bool $withRoles
     */
    public function findOrThrowException($id)
    {
        // TODO: Implement findOrThrowException() method.
    }

    /**
     * @param  $per_page
     * @param  string $order_by
     * @param  string $sort
     * @return mixed
     * @internal param $status
     */
    public function getEavCategoryPaginated($per_page, $order_by = 'id', $sort = 'asc')
    {
        // TODO: Implement getEavCategoryPaginated() method.
    }

    /**
     * @param  string $order_by
     * @param  string $sort
     * @return mixed
     */
    public function getAllEavCategory($order_by = 'id', $sort = 'asc')
    {
        // TODO: Implement getAllEavCategory() method.
    }

    /**
     * @param  $input
     * @return mixed
     * @internal param $roles
     */
    public function create($input)
    {
        // TODO: Implement create() method.
    }

    /**
     * @param  $id
     * @param  $input
     * @return mixed
     * @internal param $roles
     */
    public function update($id, $input)
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
}