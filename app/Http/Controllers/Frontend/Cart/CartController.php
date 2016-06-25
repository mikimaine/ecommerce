<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/22/2016
 * Time: 10:12 PM
 */

namespace app\Http\Controllers\Frontend\Cart;


use App\Http\Controllers\Controller;
use Innovate\Cart\CartContract;
use Innovate\Repositories\Product\ProductContract;
use Cart;

/**
 * Class CartController
 * @package app\Http\Controllers\Frontend\Cart
 */
class CartController  extends Controller {


    private $product;

    /**
     * @var CartContract
     */
    private $cart;

    /**
     * @param ProductContract $product
     * @internal param CartContract $cart
     */
    function __construct(ProductContract $product)
    {
        $this->product = $product;
    }


    /**
     * @return mixed
     */
    public function  index()
    {

        var_dump(Cart::content());
       // dd($this->cart->count());
           //$this->cart->add(4);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function create($id)
    {
        dd($id);
        $this->cart->add($id);
    }

    public function instance()
    {
        $product = $this->product->eagerLoadWhere('product_translations',\Input::get('id'));

        Cart::add(['id'=>\Input::get('id'),'name'=> $product->product_translations[0]->name,'qty'=>1,'price'=>$product->price]);


        return redirect()->back()->with('message', 'Product is added to the cart');
    }

    public function show($id)
    {
        dd($id);
        $this->cart->add($id);
    }

}