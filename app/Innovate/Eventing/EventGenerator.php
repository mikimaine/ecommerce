<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 1:42 PM
 */

namespace Innovate\Eventing;


/**
 * Class EventGenerator
 * @package Innovate\Eventing
 */
trait EventGenerator {

    /**
     * @var array
     */
    protected $pendingEvents = [];

    /**
     * @param $event
     */
    public  function raise($event)
    {
        $this->pendingEvents[] = $event;

    }

    /**
     * @return array
     */
    public function releaseEvents()
  {
        $events = $this->pendingEvents;
        $this->pendingEvents = [];

      return $events;
  }

}