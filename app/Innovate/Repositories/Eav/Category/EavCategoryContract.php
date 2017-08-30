<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/29/2016
 * Time: 5:54 PM.
 */

namespace Innovate\Repositories\Eav\Category;

/**
 * Interface EavCategoryContract.
 */
interface EavCategoryContract
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
    public function getEavCategoryPaginated($per_page, $order_by = 'id', $sort = 'asc');

    /**
     * @param string $order_by
     * @param string $sort
     *
     * @return mixed
     */
    public function getAllEavCategory($order_by = 'id', $sort = 'asc');

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
}
