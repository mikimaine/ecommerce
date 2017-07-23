<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/22/2016
 * Time: 10:14 PM.
 */

namespace Innovate\Cart;

use Cart;
use Innovate\Repositories\Product\ProductContract;

class CartModel implements CartContract
{
    private $product;

    public function __construct(ProductContract $product)
    {
        $this->product = $product;
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function add($id)
    {
        $product = $this->product->eagerLoadWhere('product_translations', $id);

        Cart::add(['id' => $id, 'name' => $product->product_translations[0]->name, 'qty' => 1, 'price' => $product->price]);
        dd(Cart::content());
    }

    /**
     * @param $id
     * @param $data
     *
     * @return mixed
     */
    public function update($id, $data)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function remove($id)
    {
        // TODO: Implement remove() method.
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function get($id)
    {
        // TODO: Implement get() method.
    }

    /**
     * @return mixed
     */
    public function content()
    {
        // TODO: Implement content() method.
    }

    /**
     * @return mixed
     */
    public function destroy()
    {
        // TODO: Implement destroy() method.
    }

    /**
     * @return mixed
     */
    public function total()
    {
        // TODO: Implement total() method.
    }

    /**
     * @return mixed
     */
    public function tax()
    {
        // TODO: Implement tax() method.
    }

    /**
     * @return mixed
     */
    public function subtotal()
    {
        // TODO: Implement subtotal() method.
    }

    /**
     * @return mixed
     */
    public function count()
    {
        // TODO: Implement count() method.
        return Cart::count();
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function search($id)
    {
        // TODO: Implement search() method.
    }
}
