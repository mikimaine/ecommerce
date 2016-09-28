<div class="cart-summary">
    <i class="fa fa-shopping-cart"></i>
    <span>My cart:</span>
    <div>
        <a href="#">{{ Cart::content()->count() }} items<i class="fa fa-angle-down"></i></a>
        <ul>

            @foreach ( Cart::content() as $cart)
            <li>
                <a href="#"><img src="{!! config('app.url').'/app/innovate/product/'.$cart->options->img !!}" width="54" height="54" alt="{{ $cart->name }}"></a>
                <h4><a href="#">{{ $cart->name }}</a></h4>
                <p> {{ $cart->qty }} *  {{ $cart->price }}</p>
            </li>
            @endforeach
            <li class="subtotal">Subtotal: {{ Cart::total()  }} ETB</li>
            <li class="total">
                <a href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart"></i>&nbsp; View Cart</a>
                <a href="{{ route('cart.checkout') }}">Checkout &nbsp;<i class="fa fa-share"></i></a>
            </li>

        </ul>
    </div>
</div>