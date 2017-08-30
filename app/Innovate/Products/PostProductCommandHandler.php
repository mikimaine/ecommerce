<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 1:17 PM.
 */

namespace Innovate\Products;

use Innovate\Commanding\CommandHandler;
use Innovate\Eventing\EventDispatcher;
use Innovate\Repositories\Product\ProductContract;

/**
 * Class PostProductCommandHandler.
 */
class PostProductCommandHandler implements CommandHandler
{
    /**
     * @var Product
     */
    protected $product;

    /**
     * @var EventDispatcher
     */
    protected $dispatcher;

    /**
     * @param Product|ProductContract $product
     * @param EventDispatcher         $dispatcher
     */
    public function __construct(ProductContract $product, EventDispatcher $dispatcher)
    {
        $this->product = $product;

        $this->dispatcher = $dispatcher;
    }

    /**
     * Handle the command.
     *
     * @param $command
     *
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
