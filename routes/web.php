<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\Home;
use App\Http\Controllers\homeAdmin;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopPage;
use App\Http\Controllers\usersController;
use GuzzleHttp\Middleware;
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

Route::get('/', [Home::class, 'index'])->name('home');

Route::get('shop', [ShopPage::class, 'index'])->name('shop');
Route::get('/shop/{id}/quickview', [ShopPage::class, 'quickview']);



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [usersController::class, 'index'])->name('register');
    Route::post('/register', [usersController::class, 'store']);

    Route::post('/login', [usersController::class, 'login']);
    Route::get('/login', [usersController::class, 'indexlogin'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [usersController::class, 'logout']);
    Route::post('addToCart', [CartController::class, 'addToCart']);

    Route::get('card', [CartController::class, 'index'])->name('cart');
    Route::POST('cart/update-quantity', [CartController::class, 'updateQuantity'])->name('cart.updateQuantity');
    Route::POST('cart/distroy/{id}', [CartController::class, 'distroy']);

    Route::POST('checkout', [OrderController::class, 'index'])->name('checkout.index');
    Route::POST('placeorder', [OrderController::class, 'placeorder'])->name('placeorder');
    Route::get('payment', [OrderController::class, 'payment'])->name('payment');

    Route::post('apply-coupon', [CouponController::class, 'applycoupon'])->name('applycoupon');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('/', adminController::class)->names(['index' => 'admin.index']);

    Route::get('homeAdmin', [homeAdmin::class, 'index'])->name('homeAdmin');
    Route::post('homeAdmin', [homeAdmin::class, 'storeimage'])->name('storeimage');
    Route::post('homeAdmin/{id}', [homeAdmin::class, 'updateimage'])->name('updateimage');

    Route::resource('category', CategoryController::class);

    Route::resource('brand', BrandController::class);

    Route::resource('product', ProductController::class);
    Route::post('product/approve/{id}', [ProductController::class, 'approve']);
    Route::post('product/hide/{id}', [ProductController::class, 'hide']);

    
    Route::get('payment', [PaymentsController::class, 'index'])->name('payment.index');

    Route::get('coupon', [CouponController::class, 'index'])->name('couponIndex');
    Route::post('coupon/store', [CouponController::class, 'store'])->name('couponStore');
    Route::post('coupon/{id}', [CouponController::class, 'distroy']);
});
