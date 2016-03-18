<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 6:20 PM
 */

namespace Innovate\Listeners;


use Innovate\Eventing\EventListener;
use Innovate\Products\ProductWasArchived;
use Innovate\Products\ProductWasPosted;

class EmailNotifier extends EventListener {


    public function whenProductWasPosted(ProductWasPosted $event)
    {
        var_dump('Send Confirmation Email about event :  '.$event->product->title);
    }

    /**
     * @param ProductWasArchived $event
     */
    public function whenProductWasArchived(ProductWasArchived $event)
    {
        var_dump('Send Congratulations Email for the customer about buying this product   :  '.$event->product->title);
    }
}