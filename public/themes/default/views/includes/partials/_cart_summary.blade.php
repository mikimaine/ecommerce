<div class="cart-summary">
    <i class="fa fa-shopping-cart"></i>
    <span>My cart:</span>
    <div>
        <a href="#">{{ Cart::content()->count() }} items<i class="fa fa-angle-down"></i></a>
        <ul>

            @foreach ( Cart::content() as $row)
            <li>
                <a href="#"><img src="{{ Theme::asset('default::pic/catalog-grid/item-2.jpg') }}" width="54" height="54" alt=""></a>
                <h4><a href="#">Fujifilm Finepix xp50</a></h4>
                <p>1 × $900</p>
            </li>
            <li>
                <a href="#"><img src="{{ Theme::asset('default::pic/catalog-grid/item-6.jpg') }} " width="54" height="54" alt=""></a>
                <h4><a href="#">Motorola Triumph</a></h4>
                <p>1 × $5500</p>
            </li>
            <li class="subtotal">Subtotal: $6400.00</li>
            <li class="total">
                <a href="#"><i class="fa fa-shopping-cart"></i>&nbsp; View Cart</a>
                <a href="#">Checkout &nbsp;<i class="fa fa-share"></i></a>
            </li>
            @endforeach
        </ul>
    </div>
</div>