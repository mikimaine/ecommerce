<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/25/2016
 * Time: 7:00 PM
 */

namespace Innovate\Repositories\Order;


use Innovate\Order\Order;
use Innovate\Repositories\BaseRepository;

class EloquentOrderRepository extends BaseRepository implements OrderContract
{


    protected $modelName = 'Innovate\Order\Order';

    /**
     * @param $input
     * @return Tax
     */
    protected function createStub($input)
    {
        $order = new Order();
        $order->product_id = $input['country_id'];
        $order->customer_id = $input['customer_id'];
        $order->shipping_id = $input['shipping_id'];
        $order->download_link = $input['download_link'];
        $order->no_of_product = $input['no_of_product'];
        $order->firstname = $input['firstname'];
        $order->lastname = $input['lastname'];
        $order->email = $input['email'];
        $order->telephone = $input['telephone'];
        $order->total_price = $input['total_price'];
        $order->status = $input['status'];
        $order->custom_fileds = $input['custom_fileds'];

        return $order;
    }
}