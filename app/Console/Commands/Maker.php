<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/10/2016
 * Time: 2:10 AM
 */

namespace App\Console\Commands;
use Illuminate\Console\Command;


class Maker extends Command
{
    /**
     * The name and signature of console command.
     *
     * @var string
     */
    protected $signature = 'maker';

    /**
     * The console command description.
     *
     * @var string
     */
    protected$description = 'Display the Maker of the application ';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $this->comment(PHP_EOL . 'This INNOVATE  E-COMMERCE FRAMEWORK is created by  MIKI MAINE AMDU -- mikias.amdu@gmail.com'. PHP_EOL);
    }
}