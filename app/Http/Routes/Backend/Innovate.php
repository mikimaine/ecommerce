<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 3/20/2016
 * Time: 6:19 PM
 */


$router->get('check_out_agreement/deleted', 'StaticPage\CheckOutAgreementController@deleted')->name('admin.check_out_agreement.deleted');
$router->group(['prefix' => 'check_out_agreement/{id}', 'where' => ['id' => '[0-9]+']], function () use ($router) {
    $router->get('restore', 'StaticPage\CheckOutAgreementController@restore')->name('admin.check_out_agreement.restore');
    $router->get('delete', 'StaticPage\CheckOutAgreementController@delete')->name('admin.check_out_agreement.delete-permanently');

});
$router->resource('check_out_agreement','StaticPage\CheckOutAgreementController');


$router->get('bank_transfer_info/deleted', 'StaticPage\BankTransferInfoController@deleted')->name('admin.bank_transfer_info.deleted');
$router->group(['prefix' => 'bank_transfer_info/{id}', 'where' => ['id' => '[0-9]+']], function () use ($router) {
    $router->get('restore', 'StaticPage\BankTransferInfoController@restore')->name('admin.bank_transfer_info.restore');
    $router->get('delete', 'StaticPage\BankTransferInfoController@delete')->name('admin.bank_transfer_info.delete-permanently');

});
$router->resource('bank_transfer_info','StaticPage\BankTransferInfoController');


$router->resource('tax', 'Tax\Backend\TaxController');


$router->resource('eav/attribute', 'Eav\Attribute\EavProductAttribute');
$router->resource('eav/category',  'Eav\Category\EavProductAttributeCategory');

