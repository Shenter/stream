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

Route::middleware(['auth:sanctum'])->get('/dashboard', function () {
    return view('dashboard',['products'=>\App\Models\Product::all()]);
})->name('dashboard');

require __DIR__.'/auth.php';
