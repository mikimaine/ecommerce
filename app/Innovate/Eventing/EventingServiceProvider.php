<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 10:07 PM
 */

namespace Innovate\Eventing;


use Illuminate\Support\ServiceProvider;

/**
 * Class EventingServiceProvider
 * @package Innovate\Eventing
 */
class EventingServiceProvider extends ServiceProvider {


    /**
     * Register the service provider for the innovate event listener.
     *
     * @return void
     */
    public function register()
    {
        // Get all event listener from the config file
        // for all of those listener will attach the Innovate.* (all events that fall in the innovate namespace)
        // the listen for the events
        $listeners = $this->app['config']->get('innovate.listeners');
        foreach($listeners as $listener)
        {
            $this->app['events']->listen('Innovate.*',$listener);
        }
    }
}