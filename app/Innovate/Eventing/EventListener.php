<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 6:31 PM.
 */
namespace Innovate\Eventing;

use ReflectionClass;

/**
 * Class EventListener.
 */
class EventListener
{
    /**
     * @param $event
     *
     * @return mixed
     */
    public function handle($event)
    {
        // prepare the event name from class name
        // then if there is a listener resisted for that event
        // call that user function in the registered
        $eventName = $this->getEventName($event);

        if ($this->listenerIsRegistered($eventName)) {
            return call_user_func([$this, 'when'.$eventName], $event);
        }
    }

    /**
     * get name of the event from the class namespace.
     *
     * @param $event
     *
     * @return string
     */
    protected function getEventName($event)
    {
        $eventName = (new ReflectionClass($event))->getShortName();

        return $eventName;
    }

    /**
     * Check if the event method really exist.
     *
     * @param $eventName
     *
     * @return bool
     */
    protected function listenerIsRegistered($eventName)
    {
        // append when on the event name then
        // check if a method with that name exist
        // return true(if found ) or false
            $method = "when{$eventName}";

        return method_exists($this, $method);
    }
}
