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
    return  redirect('dashboard');
});


Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\CartController@index')->name('dashboard');
    Route::get('/cart','App\Http\Controllers\CartController@cart')->name('cart');
    Route::resource('product', App\Http\Controllers\ProductController::class,
     );
});





require __DIR__.'/auth.php';
