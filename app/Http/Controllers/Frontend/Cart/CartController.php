<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/22/2016
 * Time: 10:12 PM.
 */
namespace app\Http\Controllers\Frontend\Cart;

use App\Http\Controllers\Controller;
use Auth;
use Cart;
use Gloudemans\Shoppingcart\Exceptions\ShoppingcartInvalidRowIDException;
use Illuminate\Http\Request;
use Innovate\Cart\CartContract;
use Innovate\Repositories\Customer\CustomerContract;
use Innovate\Repositories\Order\OrderContract;
use Innovate\Repositories\Product\ProductContract;
use Theme;

/**
 * Class CartController.
 */
class CartController extends Controller
{
    /**
     * @var ProductContract
     */
    private $product;

    /**
     * @var CartContract
     */
    private $cart;

    /**
     * @var
     */
    private $customer;


    private $order;

    /**
     * @param ProductContract  $product
     * @param CustomerContract $customer
     */
    public function __construct(ProductContract $product, CustomerContract $customer, OrderContract $order)
    {
        $this->product = $product;
        $this->customer = $customer;

        $this->order = $order;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        // var_dump(Cart::content());
        return Theme::view('frontend.product.cart');
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function create($id)
    {
        dd($id);
        $this->cart->add($id);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function instance()
    {
        $product = $this->product->eagerLoadWhere('product_translations', \Input::get('id'));

        Cart::add(['id' => \Input::get('id'),
            'name'      => $product->product_translations[0]->name,
            'qty'       => 1,
            'price'     => $product->price,
            'options'   => ['img' => $product->img_big, 'sku' => $product->sku, 'currency' => $product->currency],
        ]);


        return redirect()->back()->with('flash_success', 'Product is added to the cart');
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {
            $row_id = $id;
            //remove
            Cart::remove($row_id);
            $message = 'item removed from the cart';
        } catch (ShoppingcartInvalidRowIDException $e) {
            $message = 'Failed to remove item';
        }

        return redirect()->back()->with('flash_success', $message);
    }

    /**
     * @return \Caffeinated\Themes\View
     */
    public function checkout()
    {
        if (Auth::guest()) {
            return Theme::view('frontend.product.checkout');
        } else {
            return Theme::view('frontend.product.checkout')
                ->withCustomer($this->customer->getByUser(Auth::user()->id));
        }
    }

    public function guestCheckout()
    {
        return Theme::view('frontend.product.guest');
    }

    /**
     * @param Request $request
     *
     * @return mixed
     */
    public function guestRegister(Request $request)
    {
        $all = $request->all();
        $customer = $this->customer->create($all);


        foreach (Cart::content() as $cart) {
            $order = [
                'product_id'    => $cart->id,
                'customer_id'   => $customer->id,
                'shipping_id'   => null,
                'download_link' => null,
                'no_of_product' => $cart->qty,
                'firstname'     => $all['firstname'],
                'lastname'      => $all['lastname'],
                'email'         => $all['secondary_email'],
                'telephone'     => $all['telephone'],
                'total_price'   => $cart->price,
                'status'        => 0,
                'custom_fileds' => 'sample fields',
            ];

            $this->order->create($order);
        }

        Cart::destroy();

        return redirect()->route('product.index')->withFlashSuccess(trans('cart.message.guest_susses'));
    }
}
