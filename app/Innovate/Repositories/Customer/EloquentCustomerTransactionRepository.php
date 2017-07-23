<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/25/2016
 * Time: 7:39 PM.
 */

namespace Innovate\Repositories\Customer;

use Innovate\Customer\CustomerTransaction;
use Innovate\Repositories\BaseRepository;

class EloquentCustomerTransactionRepository extends BaseRepository implements CustomerTransactionContract
{
    protected $modelName = 'Innovate\Customer\CustomerTransaction';

    /**
     * @param $input
     *
     * @return Tax
     */
    protected function createStub($input)
    {
        $customer_transaction = new CustomerTransaction();
        $customer_transaction->customer_id = $input['order_id'];
        $customer_transaction->order_id = $input['no_of_downloads_bought'];
        $customer_transaction->description = $input['no_of_downloads_user'];
        $customer_transaction->amount = $input['no_of_downloads_user'];

        return $customer_transaction;
    }
}
