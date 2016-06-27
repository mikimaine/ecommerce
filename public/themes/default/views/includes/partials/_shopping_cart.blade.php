<!-- widget cart -->
<div class="widget widget-cart">
    <div class="head"><i class="green fa fa-shopping-cart"></i>Shopping cart</div>
    <div class="cont">
        <ul>
            @foreach ( Cart::content() as $cart)
                <li>
                    <a href="#"><img src="{!! config('app.url').'/app/innovate/product/'.$cart->options->img !!}" width="54" height="54" alt="{{ $cart->name }}"></a>
                    <h4><a href="#">{{ $cart->name }}</a></h4>
                    <p>{{ $cart->qty }} *  {{ $cart->price }}</p>
                </li>
            @endforeach

        </ul>
        <a href="{{ route('cart.checkout') }}" class="fa fa-share"></a>
        <div class="total">Subtotal:  {{ Cart::total()  }} ETB</div>
    </div>
</div>
<!--/ widget cart -->