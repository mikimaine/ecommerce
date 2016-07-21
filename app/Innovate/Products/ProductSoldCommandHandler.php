<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 10:19 PM.
 */
namespace Innovate\Products;

use Innovate\Commanding\CommandHandler;
use Innovate\Eventing\EventDispatcher;
use Innovate\Repositories\Product\ProductContract;

/**
 * Class ProductSoldCommandHandler.
 */
class ProductSoldCommandHandler implements CommandHandler
{
    /**
     * @var
     */
    protected $product;

    /**
     * @var
     */
    private $dispatcher;

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
        $this->product->archive($command->productId);
        $this->dispatcher->dispatch($this->product->releaseEvents());
    }
}
