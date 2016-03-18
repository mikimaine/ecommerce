<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 1:17 PM
 */

namespace Innovate\Products;


use Innovate\Commanding\CommandHandler;
use Innovate\Eventing\EventDispatcher;

class PostProductCommandHandler implements CommandHandler {
   protected $product;

    protected $dispatcher;

    /**
     * @param Product $product
     * @param EventDispatcher $dispatcher
     */
    function __construct(Product $product,EventDispatcher $dispatcher )
    {
        $this->product = $product;

        $this->dispatcher = $dispatcher;
    }


    /**
     *
     * Handle the command
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $product = $this->product->post(
            $command->title,
            $command->description
        );
        $this->dispatcher->dispatch($product->releaseEvents());

    }
}