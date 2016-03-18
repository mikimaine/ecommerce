<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 6:31 PM
 */

namespace Innovate\Eventing;


use ReflectionClass;

class EventListener {


    /**
     * @param $event
     * @return mixed
     */
    public function handle($event)
    {
        $eventName = $this->getEventName($event);



        if($this->listenerIsRegistered($eventName)){

            return call_user_func([$this,'when'.$eventName],$event);
        }

    }

    /**
     * get name of the event from the class namespace
     * @param $event
     * @return string
     */
    protected function getEventName($event)
    {
        $eventName = (new ReflectionClass($event))->getShortName();
        return $eventName;
    }

    /**
     *
     * Check if the event method really exist
     * @param $eventName
     * @return mixed
     */
    protected function listenerIsRegistered($eventName)
    {
            $method = "when{$eventName}";
            return method_exists($this,$method);
    }



}