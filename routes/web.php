<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\Home;
use App\Http\Controllers\homeAdmin;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopPage;
use App\Http\Controllers\usersController;
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

Route::get('/', [Home::class,'index'])->name('home');

Route::get('shop', [ShopPage::class,'index'])->name('shop');
Route::get('/shop/{id}/quickview', [ShopPage::class,'quickview']);

Route::get('/register',[usersController::class,'index'])->name('regster');
Route::post('/register',[usersController::class,'store']);

Route::post('/login',[usersController::class,'login']);
Route::get('/login',[usersController::class,'indexlogin'])->name('login');

Route::get('/logout',[usersController::class,'logout']);

Route::resource('admin',adminController::class)->only('index');

Route::get('admin/homeAdmin',[homeAdmin::class,'index'])->name('homeAdmin');
Route::post('admin/homeAdmin',[homeAdmin::class,'storeimage'])->name('storeimage');
Route::post('admin/homeAdmin/{id}',[homeAdmin::class,'updateimage'])->name('updateimage');

Route::resource('admin/product',ProductController::class);
Route::post('admin/product/approve/{id}', [ProductController::class, 'approve']);
Route::post('admin/product/hide/{id}', [ProductController::class, 'hide']);

Route::post('addToCart', [CartController::class, 'addToCart']);

Route::get('card', [CartController::class, 'index'])->name('cart');
Route::POST('cart/update-quantity', [CartController::class, 'updateQuantity'])->name('cart.updateQuantity');
Route::POST('cart/distroy/{id}', [CartController::class, 'distroy']);

Route::get('admin/coupon',[CouponController::class, 'index'])->name('couponIndex');

Route::post('apply-coupon',[CouponController::class, 'applycoupon'])->name('applycoupon');

Route::resource('admin/category',CategoryController::class);

Route::resource('admin/brand',BrandController::class);