<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 1:19 PM.
 */

namespace Innovate\Commanding;

/**
 * Interface CommandHandler.
 */
interface CommandHandler
{
    /**
     * Handle the command.
     *
     * @param $command
     *
     * @return mixed
     */
    public function handle($command);
}
