<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/orders', function () {
    return view('orders');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/userhome', function () {
    return view('userhome');
});

Route::get('/userabout', function () {
    return view('userabout');
});

Route::get('/userproduct', function () {
    return view('userproduct');
});

Route::get('/userorder', function () {
    return view('userorder');
});

Route::get('/usercontact', function () {
    return view('usercontact');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/adminproduct', function () {
    return view('adminproduct');
});

Route::get('/adminlist', function () {
    return view('adminlist');
});

Route::get('/adminmessage', function () {
    return view('adminmessage');
});

Route::get('/adminprofile', function () {
    return view('adminprofile');
});

Route::get('/adminusers', function () {
    return view('adminusers');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
 
Route::group(['middleware' => 'auth'], function () {
    Route::get('/userhome', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});



Route::post('/products', [ProductController::class, 'store'])->name('products.store');


Route::get('layout.app', function () {
    return view('layout.app');
});
 
Route::resource('/product', ProductController::class);