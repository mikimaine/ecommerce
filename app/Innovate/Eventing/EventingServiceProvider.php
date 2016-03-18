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

class EventingServiceProvider extends ServiceProvider {


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $listeners = $this->app['config']->get('innovate.listeners');
        foreach($listeners as $listener)
        {
            $this->app['events']->listen('Innovate.*',$listener);
        }
    }
}