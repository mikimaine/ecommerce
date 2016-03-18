<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 5:20 PM
 */

namespace Innovate\Eventing;


use Illuminate\Events\Dispatcher;
use Illuminate\Log\Writer;

class EventDispatcher {

    protected $event;

    protected $log;

    function __construct(Dispatcher $event, Writer $log)
    {
        $this->event = $event;
        $this->log = $log;
    }

    public function dispatch(array $events){

        foreach($events as $event)
        {
            $eventName = $this->getEventName($event);
            $this->event->fire($eventName,$event);

            $this->log->info("$eventName was fired");
        }

    }

    /**
     * @param $event
     * @return mixed
     */
    protected function getEventName($event)
    {
        return str_replace('\\', '.', get_class($event));

    }
}