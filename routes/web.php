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
    $products = App\Models\Product::take(3)->latest()->get();
    return view('welcome', [
        'products' => $products
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/catalogo', [App\Http\Controllers\ProductController::class, 'index']);
Route::get('/productos/{producto}', [App\Http\Controllers\ProductController::class, 'show']);

Route::view ('/about', 'about');

