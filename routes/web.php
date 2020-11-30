<?php

use App\Http\Controllers\RouteController;
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

Route::get('/', [RouteController::class, 'index'])->name("shopping.index");
Route::post('/main', [RouteController::class, 'store_search']);

Route::get('/buy/{id?}', [RouteController::class, 'buy'])->name('shopping.buy');

Route::get('/carrinho', [RouteController::class, 'carrinho'])->name('shopping.carrinho');

Route::get('/search', [RouteController::class, 'search'])->name('shopping.search');

Route::get('/search/search_not_found', [RouteController::class, 'search_not_found'])->name('shopping.search');

Route::get('/signup', [RouteController::class, 'signup'])->name('shopping.signup');

Route::get('/add_product', [RouteController::class, 'add_product'])->name('shopping.add_product');
Route::post('/add_product', [RouteController::class, 'store_product']);
