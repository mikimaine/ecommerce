<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/20/2016
 * Time: 4:58 PM
 */

namespace Innovate\Repositories\Tax;


/**
 * Interface TaxContract
 * @package Innovate\Repositories\Tax
 */
interface TaxContract {


    /**
     * @param  $id
     * @return mixed
     * @internal param bool $withRoles
     */
    public function findOrThrowException($id);

    /**
     * @param  $per_page
     * @param  string      $order_by
     * @param  string      $sort
     * @param  $status
     * @return mixed
     */
    public function getTaxPaginated($per_page, $status = 1, $order_by = 'id', $sort = 'asc');



    /**
     * @param  string  $order_by
     * @param  string  $sort
     * @return mixed
     */
    public function getAllTax($order_by = 'id', $sort = 'asc');

    /**
     * @param  $input
     * @return mixed
     * @internal param $roles
     */
    public function create($input);

    /**
     * @param  $id
     * @param  $input
     * @return mixed
     * @internal param $roles
     */
    public function update($id, $input);

    /**
     * @param  $id
     * @return mixed
     */
    public function destroy($id);

    /**
     * @param  $id
     * @return mixed
     */
    public function delete($id);


}