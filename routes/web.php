<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
.........*/

Route::get('/','WelcomeController@index');

Route::get('/product-category/{id}','WelcomeController@category');
Route::get('/product-details/{id}','WelcomeController@productDetails');
Route::post('/add-to-cart','CartController@addToCart');
Route::get('/show-cart','CartController@showCart');
Route::post('/update-cart-product','CartController@updateCart');
Route::get('/update-cart-product/{id}','CartController@deleteCart');
Route::get('/direct-add-to-cart/{id}','CartController@directAddToCart');



Route::get('/checkout','CheckoutController@index');
Route::post('/new-customer','CheckoutController@saveCustomerInfo');
Route::post('/customer-login','CheckoutController@customerLogin');
Route::post('/customer-logout','CheckoutController@customerLogout');
Route::get('/shipping-info','CheckoutController@showShippingInfo');
Route::post('/new-shipping','CheckoutController@saveShippingInfo');
Route::get('/payment-info','CheckoutController@showPaymentInfo');
Route::post('/new-order','CheckoutController@saveOderInfo');

Route::get('/order-info','OrderController@saveOderInfo');
Route::get('/view-order-details/{id}','OrderController@viewOrdesDetails');
Route::get('/view-order-invoice/{id}','OrderController@viewOrdesInvoice');
/*pdf*/
Route::get('/pdf','OrderController@myPdf');
Route::get('/download-invoice/{id}','OrderController@downloadOrderInvoice');



Auth::routes();
//admin

Route::get('/home', 'HomeController@Index')->name('home');

Route::get('/add-category', 'CategoryController@addCategory');
Route::post('/new-category', 'CategoryController@saveCategoryInfo');
Route::get('/manage-category', 'CategoryController@manageCategoryInfo');
Route::get('/published-category/{id}', 'CategoryController@publishCategoryInfo');
Route::get('/unpublished-category/{id}', 'CategoryController@unpublishCategoryInfo');
Route::get('/edit-category/{id}', 'CategoryController@editCategoryInfo');
Route::post('/update-category', 'CategoryController@updateCategoryInfo');
Route::get('/delete-category/{id}', 'CategoryController@deleteCategoryInfo');


Route::get('/add-brand', 'BrandController@addBrand');
Route::post('/new-brand', 'BrandController@saveBrandInfo');
Route::get('/manage-brand', 'BrandController@manageBrandInfo');
Route::get('/unpublished-brand/{id}', 'BrandController@unplibishedBrandInfo');
Route::get('/published-brand/{id}', 'BrandController@plibishedBrandInfo');
Route::get('/edit-brand/{id}', 'BrandController@editBrandInfo');
Route::post('/update-brand', 'BrandController@updateBrandInfo');
Route::get('/delete-brand/{id}', 'BrandController@deleteBrandInfo');

Route::get('/add-product', 'ProductController@addProduct');
Route::post('/new-product', 'ProductController@saveProductInfo');
Route::get('/manage-product', 'ProductController@manageProductInfo');
Route::get('/view-product/{id}', 'ProductController@viewProductInfo');
Route::get('/unpublished-category/{id}', 'ProductController@unpublishProductInfo');
Route::get('/published-category/{id}', 'ProductController@publishProductInfo');
Route::get('/edit-product/{id}', 'ProductController@editProductInfo');
Route::post('/update-product', 'ProductController@updateProductInfo');
Route::get('/delete-category/{id}', 'ProductController@delateProductInfo');
