<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/20/2016
 * Time: 6:19 PM.
 */

/**
 * Check out Agreement Module Routes.
 */
$router->get('check_out_agreement/deleted', 'StaticPage\CheckOutAgreementController@deleted')->name('admin.check_out_agreement.deleted');
$router->group(['prefix' => 'check_out_agreement/{id}', 'where' => ['id' => '[0-9]+']], function () use ($router) {
    $router->get('restore', 'StaticPage\CheckOutAgreementController@restore')->name('admin.check_out_agreement.restore');
    $router->get('delete', 'StaticPage\CheckOutAgreementController@delete')->name('admin.check_out_agreement.delete-permanently');
});
$router->resource('check_out_agreement', 'StaticPage\CheckOutAgreementController');

/*
 * Bank Transfer Module
 */
$router->get('bank_transfer_info/deleted', 'StaticPage\BankTransferInfoController@deleted')->name('admin.bank_transfer_info.deleted');
$router->group(['prefix' => 'bank_transfer_info/{id}', 'where' => ['id' => '[0-9]+']], function () use ($router) {
    $router->get('restore', 'StaticPage\BankTransferInfoController@restore')->name('admin.bank_transfer_info.restore');
    $router->get('delete', 'StaticPage\BankTransferInfoController@delete')->name('admin.bank_transfer_info.delete-permanently');
});
$router->resource('bank_transfer_info', 'StaticPage\BankTransferInfoController');

/*
 * Tax Module Routes
 */
$router->resource('tax', 'Tax\Backend\TaxController');

/*
 * Eav Module Routes
 */

$router->resource('eav/attribute', 'Eav\Attribute\EavProductAttribute');
$router->resource('eav/category', 'Eav\Category\EavProductAttributeCategory');

/*
 * Category Module Routes
 */

//$router->get('category/deleted', 'Category\CategoryController@deleted')->name('admin.category.deleted');
$router->resource('category/description', 'Category\CategoryDescriptionController');
$router->resource('category', 'Category\CategoryController');

/*
 * Product Module Routes
 */

$router->post('product/newproduct/downloadable', 'Product\ProductController@storeDownloadable')->name('admin.product.store.downloadable');
$router->post('product/newproduct/non_downloadable', 'Product\ProductController@storeNonDownloadable')->name('admin.product.store.non_downloadable');
$router->post('product/newproduct', 'Product\ProductController@newProduct')->name('admin.product.newProduct');
$router->get('product/newproduct', 'Product\ProductController@create')->name('admin.product.newProduct.get');
$router->get('product/delete*', 'Product\ProductController@delete')->name('admin.product.newProduct.delete');
$router->resource('product', 'Product\ProductController');

/*
 * Activity Log Module Routes
 */
$router->get('activity_log/flush', 'Activity\ActivityController@flush')->name('admin.activity_log.flush');
$router->resource('activity_log', 'Activity\ActivityController');

/*
 * Orders
 */
$router->get('order/deleted', 'Order\OrderController@deleted')->name('admin.order.deleted');
$router->resource('order', 'Order\OrderController');
