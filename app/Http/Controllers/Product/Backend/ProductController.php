<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/18/2016
 * Time: 12:44 PM
 */

namespace app\Http\Controllers\Product\Backend;

use App\Http\Controllers\CommandsDomainEventController;
use Innovate\Products\PostProductCommand;
use Illuminate\Support\Facades\Input;
use Innovate\Products\ProductSoldCommand;

/**
 * Class ProductController
 * @package app\Http\Controllers\Product\Backend
 */
class ProductController extends CommandsDomainEventController{
    
    /**
     *
     */
    public function store()
    {
         $input = Input::only('title','description');
         $command = new PostProductCommand($input['title'],$input['description']);
         $this->commandBus->execute($command);
    }

    /**
     * @param $productId
     */
    public function delete($productId)
    {
        $command = new ProductSoldCommand($productId);
        $this->commandBus->execute($command);
    }

}