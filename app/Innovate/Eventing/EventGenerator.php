<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 1:42 PM.
 */

namespace Innovate\Eventing;

/**
 * Class EventGenerator.
 */
trait EventGenerator
{
    /**
     * @var array
     */
    protected $pendingEvents = [];

    /**
     * @param $event
     */
    public function raise($event)
    {
        $this->pendingEvents[] = $event;
    }

    /**
     * release the events on the pending events.
     *
     * @return array
     */
    public function releaseEvents()
    {
        // Swap the pending events with the event array and
      // clear the pending events array
      // the return the events
        $events = $this->pendingEvents;
        $this->pendingEvents = [];

        return $events;
    }
}
