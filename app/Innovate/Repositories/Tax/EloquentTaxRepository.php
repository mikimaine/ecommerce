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
     * @param $id
     * @return mixed
     * @throws GeneralException
     * @internal param bool $withRoles
     */
    public function findOrThrowException($id)
    {
        $tax = Tax::find($id);

        if (!is_null($tax)) {
            return $tax;
        }

        throw new GeneralException('That Tax does not exist.');
    }

    /**
     * @param $per_page
     * @param  string $order_by
     * @param  string $sort
     * @return mixed
     * @internal param $status
     */
    public function getTaxPaginated($per_page, $order_by = 'id', $sort = 'asc')
    {
        return Tax::orderBy($order_by, $sort)->paginate($per_page);
    }

    /**
     * @param  string $order_by
     * @param  string $sort
     * @return mixed
     */
    public function getAllTax($order_by = 'id', $sort = 'asc')
    {
        return Tax::orderBy($order_by, $sort)->get();
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
     * @param $id
     * @param $input
     * @return mixed
     * @throws GeneralException
     * @internal param $roles
     */
    public function update($id, $input)
    {
        $tax = $this->findOrThrowException($id);

        if($tax->update($input))
        {
            return true;
        }
        throw new GeneralException('There was a problem updating this tax. Please try again.');
    }

    /**
     * @param $id
     * @return mixed
     * @throws GeneralException
     */
    public function destroy($id)
    {
        $tax = $this->findOrThrowException($id);
        if ($tax->delete())
        {
        return true;
        }

        throw new GeneralException('There was a problem deleting this tax. Please try again.');

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