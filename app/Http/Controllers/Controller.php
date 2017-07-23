<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Innovate\Commanding\CommandBus;

/**
 * Class Controller.
 */
abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    protected $commandBus;

    /**
     * @param $commandBus
     */
    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }
}
