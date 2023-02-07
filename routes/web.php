<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::resource('admin',adminController::class)->only('index');

Route::resource('admin/product',ProductController::class);
Route::post('admin/product/approve/{id}', [ProductController::class, 'approve']);
Route::post('admin/product/hide/{id}', [ProductController::class, 'hide']);


Route::resource('admin/category',CategoryController::class);
Route::resource('admin/brand',BrandController::class);