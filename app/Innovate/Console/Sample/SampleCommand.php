<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/24/2016
 * Time: 11:28 AM
 */

namespace Innovate\Console\Sample;


use Illuminate\Console\Command;
use Illuminate\Console\ConfirmableTrait;

class SampleCommand extends Command {

    use ConfirmableTrait;


    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'innovate:version';



    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Out puts the version of Innovate e-commerce framework';


   public function fire()
    {

       echo "hello from sample fire";
    }

   /* public function handle()
    {

        $this->comment(PHP_EOL . 'hello from sample'. PHP_EOL);
    }*/


}