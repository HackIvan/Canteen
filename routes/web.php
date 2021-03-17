<?php

use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::redirect('/home', '/home');
Route::redirect('/', '/home');
// Route::redirect('/paypalpay', '/paypalpay');


// {
//     return view('welcome');
// });

// Route::get('/custom', function() {
//     return redirect()->to('https://www.sandbox.paypal.com/');
// });

// Route::redirect('/paymentpal', '/paymentpal');

// Route::get('order/{order_number}', [UserController::class, 'show']);
// Route::get('order/{id}', [successredirectController::class, 'show']);

Route::get('/pay', function() {
    return redirect()->to('https://canteen.ipamusl.com/pay/');
});



// Route::get('/token', function () {
//     $orders = Order::take(1)->get()->sortBy('field',1, true);
//     $orders = $orders->reverse();
//     return view('token', ['recentOrders' => $orders]);

// });

// Route::get('/token', function(){
//     return view('token');
// });



Route::get('/token', 'TokenController@index')->name('home')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();
Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add')->middleware('auth');

// Route::get('/add-to-cart/{}', 'CartController@adding')->name('cart.adding')->middleware('auth');

Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth');
Route::get('/cart/destroy/{itemId}', 'CartController@destroy')->name('cart.destroy')->middleware('auth');
Route::get('/cart/update/{itemId}', 'CartController@update')->name('cart.update')->middleware('auth');
Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout')->middleware('auth');

// Route::resource('orders', 'OrderController')->middleware('auth');
Route::resource('orders', 'OrderController')->middleware('auth');


Route::get('paypal/checkout/', 'PayPalController@getExpressCheckout')->name('paypal.checkout');
Route::get('paypal/checkout-success/', 'PayPalController@getExpressCheckoutSuccess')->name('paypal.success');
Route::get('paypal/checkout-cancel', 'PayPalController@cancelPage')->name('paypal.cancel');

Route::get('paymentpal', 'PayPalController@PaySuccess')->name('layouts.paymentpal')->middleware('auth');
Route::get('success', 'PayPalController@SuccessRedirect')->name('layouts.successredirect')->middleware('auth');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
