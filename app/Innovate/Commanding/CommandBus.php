<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 1:01 PM.
 */

namespace Innovate\Commanding;

use Illuminate\Foundation\Application;

/**
 * Class CommandBus.
 */
class CommandBus
{
    /**
     * @var
     */
    protected $commandTranslator;

    /**
     * @var Application
     */
    private $app;

    /**
     * @param Application       $app
     * @param CommandTranslator $commandTranslator
     */
    public function __construct(Application $app, CommandTranslator $commandTranslator)
    {
        $this->commandTranslator = $commandTranslator;
        $this->app = $app;
    }

    /**
     * Translate Object name into a handler class
     * resolve out of ioC container, and call handle method.
     *
     * @param $command
     */
    public function execute($command)
    {
        $handler = $this->commandTranslator->toCommandHandler($command);

        return $this->app->make($handler)->handle($command);
    }
}
