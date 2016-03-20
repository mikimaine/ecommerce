<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/20/2016
 * Time: 4:59 PM
 */

namespace Innovate\Repositories\Tax;


use App\Exceptions\GeneralException;
use Innovate\Taxs\Tax;

/**
 * Class EloquentTaxRepository
 * @package Innovate\Repositories\Tax
 */
class EloquentTaxRepository implements TaxContract {

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
     * @param  $status
     * @return mixed
     */
    public function getTaxPaginated($per_page, $status = 1, $order_by = 'id', $sort = 'asc')
    {
        // TODO: Implement getTaxPaginated() method.
    }

    /**
     * @param  string $order_by
     * @param  string $sort
     * @return mixed
     */
    public function getAllTax($order_by = 'id', $sort = 'asc')
    {
        // TODO: Implement getAllTax() method.
    }

    /**
     * @param $input
     * @return mixed
     * @throws GeneralException
     * @internal param $roles
     */
    public function create($input)
    {
        $tax = $this->createTaxStub($input);

        if($tax->save())
        {
            return true;
        }

        throw new GeneralException('There was a problem creating this user. Please try again!');

    }

    /**
     * @param  $id
     * @param  $input
     * @param  $roles
     * @return mixed
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


    /**
     * @param $input
     * @return Tax
     */
    private function createTaxStub($input)
    {
            $tax = new Tax();
            $tax->name = $input['name'];
            $tax->rate = $input['rate'];

            return $tax;
    }
}