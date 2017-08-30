<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/25/2016
 * Time: 6:53 PM.
 */

namespace Innovate\Repositories\Shipping;

use Innovate\Repositories\BaseRepository;
use Innovate\Shipping\Shipping;

class EloquentShippingRepository extends BaseRepository implements ShippingContract
{
    protected $modelName = 'Innovate\Shipping\Shipping';

    /**
     * @param $input
     *
     * @return Tax
     */
    protected function createStub($input)
    {
        $shipping = new Shipping();
        $shipping->country_id = $input['country_id'];
        $shipping->customer_id = $input['customer_id'];
        $shipping->region = $input['region'];
        $shipping->zipcode = $input['zipcode'];
        $shipping->address = $input['address'];
        $shipping->address2 = $input['address2'];

        return $shipping;
    }
}
