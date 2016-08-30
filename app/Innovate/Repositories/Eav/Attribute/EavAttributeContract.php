<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/29/2016
 * Time: 6:07 PM.
 */
namespace Innovate\Repositories\Eav\Attribute;

/**
 * Interface EavAttributeContract.
 */
interface EavAttributeContract
{
    /**
     * @param  $id
     *
     * @return mixed
     *
     * @internal param bool $withRoles
     */
    public function findOrThrowException($id);

    /**
     * @param  $per_page
     * @param string $order_by
     * @param string $sort
     *
     * @return mixed
     *
     * @internal param $status
     */
    public function getEavAttributePaginated($per_page, $order_by = 'id', $sort = 'asc');

    /**
     * @param string $order_by
     * @param string $sort
     *
     * @return mixed
     */
    public function getAllEavAttribute($order_by = 'id', $sort = 'asc');

    /**
     * @param  $input
     *
     * @return mixed
     *
     * @internal param $roles
     */
    public function create($input);

    /**
     * @param  $id
     * @param  $input
     *
     * @return mixed
     *
     * @internal param $roles
     */
    public function update($id, $input);

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

    public function eagerLoadPaginated($table, $per_page);
}
