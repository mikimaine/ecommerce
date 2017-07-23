<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/25/2016
 * Time: 7:38 PM.
 */

namespace Innovate\Repositories\Customer;

use Innovate\Customer\Customer;
use Innovate\Repositories\BaseRepository;

class EloquentCustomerRepository extends BaseRepository implements CustomerContract
{
    protected $modelName = 'Innovate\Customer\Customer';

    public function getByUser($id)
    {
        $customer = Customer::where('user_id', '=', $id);

        return $customer;
    }

    /**
     * @param $input
     *
     * @return Tax
     */
    protected function createStub($input)
    {
        $customer = new Customer();
        $customer->user_id = null;
        $customer->firstname = $input['firstname'];
        $customer->lastname = $input['lastname'];
        $customer->secondary_email = $input['secondary_email'];
        $customer->telephone = $input['telephone'];
        $customer->fax = $input['fax'];
        $customer->phone = $input['phone'];

        return $customer;
    }
}
