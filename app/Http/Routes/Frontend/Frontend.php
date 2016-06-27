<?php

/**
 * Frontend Controllers
 */

$router->get('/', 'FrontendController@index')->name('home');
$router->get('/category','Category\FrontendCategoryController@index')->name('frontend.category');

$router->get('product/trend','Product\FrontendProductController@trends')->name('frontend.product.trends');
//$router->get('product',  'Product\FrontendProductController@index')->name('frontend.product');
$router->resource('product',  'Product\FrontendProductController');


$router->get('cart/createInstance',  'Cart\CartController@instance')->name('frontend.cart.instance');

$router->group(['middleware' => 'checkout'], function () use ($router) {
    $router->get('cart/checkout', 'Cart\CartController@checkout')->name('cart.checkout');
    $router->get('cart/guestCheckout', 'Cart\CartController@guestCheckout')->name('cart.checkout');
    $router->post('cart/guestRegister', 'Cart\CartController@guestRegister')->name('cart.guestRegister');

});
$router->resource('cart','Cart\CartController');
$router->resource('search','Search\SearchController');

$router->group(['prefix' => 'api/v1'],function()
{
  Route::resource('product','Api\Product\ApiProductController');
});

/**
 * These frontend controllers require the user to be logged in
 */
$router->group(['middleware' => 'auth'], function () use ($router) {
    $router->get('dashboard', 'DashboardController@index')->name('frontend.dashboard');
    $router->get('profile/edit', 'ProfileController@edit')->name('frontend.profile.edit');
    $router->patch('profile/update', 'ProfileController@update')->name('frontend.profile.update');
});