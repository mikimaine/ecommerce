<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Innovate\Commanding\CommandBus;


/**
 * Class CommandsDomainEventController
 * @package App\Http\Controllers
 */
abstract class CommandsDomainEventController extends BaseController
{
    use DispatchesJobs, ValidatesRequests;


    /**
     * @var
     */
    protected $commandBus;

    /**
     * @param $commandBus
     */
    function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

}
