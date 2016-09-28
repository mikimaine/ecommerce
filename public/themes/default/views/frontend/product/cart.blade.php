@extends('default::layout.layout')

@section('content')

    <main class="page-content">
        <div class="grid-row">
            <div class="grid-col grid-col-9">
                <!-- cart products -->
                <div class="cart-products">
                    <table>
                        <tr>
                            <th class="pic"></th>
                            <th class="name">Product</th>
                            <th class="price">Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th class="remove"></th>
                        </tr>
                        @foreach(Cart::content()  as $cart)
                        <tr>
                            <td class="pic"><a href="#"><img src="{!! config('app.url').'/app/innovate/product/'.$cart->options->img !!}" width="54" height="54" alt=""></a></td>
                            <td class="name"><h4><a href="#">{{ $cart->name }}</a></h4></td>
                            <td class="price">{{ $cart->price }}</td>
                            <td class="quantity">
                                <div><a href="#" class="minus"></a><input type="text" value="{{ $cart->qty }}"><a href="#" class="plus"></a></div>
                            </td>
                            <td class="price">{{ $cart->price * $cart->qty }}</td>
                            <td class="remove">
                                {{ Form::open(array('route' => array('cart.destroy', $cart->rowid), 'method' => 'delete')) }}
                                <button class ="fa fa-times" type="submit" ></button>
                                {{ Form::close() }}

                         </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="6">
                                <div class="coupon">
                                    <input type="text" placeholder="Coupon code">
                                    <button type="submit" class="button">{{ trans('cart.customer_infor.apply_coupon') }}</button>
                                </div>
                                <button type="submit" class="button">{{ trans('cart.customer_infor.update_cart') }}</button><!--
										--><a  href="{{ route('cart.checkout') }}" type="submit" class="button">{{ trans('cart.processed_to_checkout') }}</a>
                            </td>
                        </tr>

                    </table>
                </div>
                <!--/ cart products -->

                <!-- cart totals -->
                <div class="cart-totals">
                    <h2>Cart Totals</h2>
                    <table>
                        <tr>
                            <th>{!! trans('cart.total') !!}</th>
                            <td>{{ Cart::total()  }} ETB</td>
                        </tr>
                        <tr>
                            <th>{!! trans('cart.customer_infor.shipping_and_handling') !!}</th>
                            <td>Free Shipping</td>
                        </tr>
                        <tr>
                            <th>Order Total</th>
                            <td>{{ Cart::total()  }} ETB</td>
                        </tr>
                    </table>
                </div>
                <!--/ cart totals -->

                <!-- shipping calculator -->
                @component_shipping_calculator()
                <!--/ shipping calculator -->
            </div>

            <div class="grid-col grid-col-3">
                <div class="grid-col grid-col-3">
                    @component_search()
                    <!--/ widget search -->

                    <!-- widget categories -->
                    @component_category()
                    <!--/ widget categories -->


                </div>



                </div>
            </div>
        </div>
    </main>
    <!--/ page content -->

@endsection