<?php

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

Route::get('/', function () {
    $title = 'home';
    return view('front.index',compact('title'));
})->name('home');

Route::get('/shop', function () {
    $title = 'shoping';
    return view('front.shop',compact('title'));
})->name('shop');

Route::get('/register', function () {
    $title = 'register';
    return view('auth.signUp',compact('title'));
})->name('regster');

Route::get('/admin', function () {
    $title = 'dashbord';
    return view('admin.index',compact('title'));
})->name('admin');

Route::get('/admin/product', function () {
    $title = 'admin product';
    return view('admin.product.index',compact('title'));
})->name('admin.product');

Route::get('/admin/product/create', function () {
    $title = 'admin product';
    return view('admin.product.create',compact('title'));
})->name('admin.product.create');