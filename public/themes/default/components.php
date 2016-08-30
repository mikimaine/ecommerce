<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/22/2016
 * Time: 9:45 PM.
 */
\Component::register('category', function () {
    return \Theme::view('includes.partials._category');
});


\Component::register('sellers', function () {
    return \Theme::view('includes.partials._sellers');
});


\Component::register('shopping_cart', function () {
    return \Theme::view('includes.partials._shopping_cart');
});


\Component::register('google_analytics', function () {
    return \Theme::view('includes.partials.ga');
});

\Component::register('search', function () {
    return \Theme::view('includes.partials.search');
});

\Component::register('tags', function () {
    return \Theme::view('includes.partials._tags');
});


\Component::register('cart_summary', function () {
    return \Theme::view('includes.partials._cart_summary');
});

\Component::register('shipping_calculator', function () {
    return \Theme::view('includes.partials._shipping_calculator');
});
