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
*/

Route::get('/', 'WelcomeController@index')->name('/');
Route::get('/mca-lead', 'WelcomeController@loadMCA')->name('/mca-lead');
Route::get('/cash-discount-lead', 'WelcomeController@loadCD')->name('/cash-discount-lead');
Route::get('/about', 'WelcomeController@about')->name('/about');
Route::get('/contact', 'WelcomeController@contact')->name('/contact');


// Auth::routes();

// Route::get('/changePassword','HomeController@showChangePasswordForm');
// Route::post('/changePassword','HomeController@changePassword')->name('changePassword');
// Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/plan', 'PlanController@index')->name('plan');

// Route::get('paypal/ec-checkout', 'PayPalController@getExpressCheckout');
// Route::get('paypal/ec-checkout-success', 'PayPalController@getExpressCheckoutSuccess');
// Route::get('paypal/adaptive-pay', 'PayPalController@getAdaptivePay');
// Route::post('paypal/notify', 'PayPalController@notify');

// Route::post('/charge', 'CheckoutController@charge');
// Route::get('/subscribe', function () { return view('subscribe'); });
// Route::post('/subscribe_process', 'CheckoutController@subscribe_process');
// Route::post('/subscribe_card_update', 'CheckoutController@subscribe_card_update');
// Route::get('/cancel_subscribe', 'CheckoutController@cancel_subscribe');

// Route::get('/invoices', 'CheckoutController@invoices');
// Route::get('/invoice/{invoice_id}', 'CheckoutController@invoice');

// Route::get('/temp', function () {return view('plan');});

// Route::get('/checkStripeStatus', 'CheckoutController@checkStripeStatus');
// Route::get('/checkPaypalStatus', 'PayPalController@checkPaypalStatus');