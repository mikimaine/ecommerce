<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/25/2016
 * Time: 7:38 PM
 */

namespace Innovate\Repositories\Customer;


use Innovate\Customer\Customer;
use Innovate\Repositories\BaseRepository;

class EloquentCustomerRepository extends BaseRepository implements CustomerContract {

    protected $modelName = 'Innovate\Customer\Customer';

    /**
     * @param $input
     * @return Tax
     */
    protected function createStub($input)
    {
        $customer = new Customer();
        $customer->user_id = $input['user_id'];
        $customer->firstname = $input['order_id'];
        $customer->lastname = $input['lastname'];
        $customer->secondary_email = $input['secondary_email'];
        $customer->telephone = $input['telephone'];
        $customer->fax = $input['fax'];
        $customer->phone = $input['phone'];


        return $customer;
    }
}