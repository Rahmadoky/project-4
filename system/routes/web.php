<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('layout.home');
});

Route::get('/blog', function () {
    return view('layout.blog');
});

Route::get('checkout', function () {
    return view('layout.checkout');
});

Route::get('contact', function () {
    return view('layout.contact');
});

Route::get('main', function () {
    return view('layout.main');
});

Route::get('product-details', function () {
    return view('layout.product-details');
});

Route::get('shop-cart', function () {
    return view('layout.shop-cart');
});

Route::get('shop', function () {
    return view('layout.shop');
});

Route::get('blog-details', function () {
    return view('layout.blog-details');
});

Route::get('login', function () {
    return view('layout.login');
});

Route::get('signup', function () {
    return view('layout.signup');
});


Route::get('template', function () {
    return view('template.base');
});

Route::get('beranda', [HomeController::class, 'showberanda']);
Route::get('kategori', [HomeController::class, 'showkategori']);
// Route::get('produk', [ProdukController::class, 'index']);


Route::get('login', [AuthController::class, 'showlogin']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);


Route::get('produk' , [ProdukController::class, 'index']);
Route::get('produk/create' , [ProdukController::class, 'create']);
Route::post('produk' , [ProdukController::class, 'store']);
Route::get('produk/{produk}' , [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit' , [ProdukController::class, 'edit']);
Route::put('produk/{produk}' , [ProdukController::class, 'update']);
Route::delete('produk/{produk}' , [ProdukController::class, 'destroy']);


Route::get('/', [CLientProdukController::class, 'index']);
Route::get('detail/{produk}', [ClientProdukController::class, 'show']);

Route::get('product', [ClientProdukController::class, 'prod']);



