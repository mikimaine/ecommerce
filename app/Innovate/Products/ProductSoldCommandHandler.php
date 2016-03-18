<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 10:19 PM
 */

namespace Innovate\Products;


use Innovate\Commanding\CommandHandler;
use Innovate\Eventing\EventDispatcher;

class ProductSoldCommandHandler implements CommandHandler{

    protected $product ;

    private $dispatcher;

    function __construct(Product $product, EventDispatcher $dispatcher)
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
        $product = $this->product->findOrFail($command->productId);
        $product->archive();

        $this->dispatcher->dispatch($product->releaseEvents());
    }
}