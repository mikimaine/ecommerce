<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 1:04 PM
 */

namespace Innovate\Commanding;


use Exception;

/**
 * Class CommandTranslator
 * @package Innovate\Commanding
 */
class CommandTranslator {

    /**
     * @param $command
     * @return mixed
     * @throws Exception
     */
    public function  toCommandHandler($command)
    {

        $handler = str_replace('Command','CommandHandler',get_class($command));

        if(!class_exists($handler))
        {
             $message = "Command handler [$handler] does not exist.";

            throw new Exception($message);
        }

        return $handler;
    }



}