<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 4/2/2016
 * Time: 1:47 PM.
 */
namespace Innovate\Repositories\Category;

interface CategoryContract
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
    public function getCategoryPaginated($per_page, $order_by = 'id', $sort = 'asc');

    /**
     * @param string $order_by
     * @param string $sort
     *
     * @return mixed
     */
    public function getAllCategory($order_by = 'id', $sort = 'asc');

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

    public function eagerLoad($table, $order_by = 'id', $sort = 'asc');
}
