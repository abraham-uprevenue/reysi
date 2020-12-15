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
Route::redirect('/', '/admin-reysi-2020/login');
Route::get('/updates-api',  [App\Http\Controllers\PageController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/catalogo', [App\Http\Controllers\ProductController::class, 'index']);
Route::get('/productos/{producto}', [App\Http\Controllers\ProductController::class, 'show']);

Route::get('/categorias', [App\Http\Controllers\ProductCategoryController::class, 'index']);
Route::get('/categorias/{categoria}', [App\Http\Controllers\ProductCategoryController::class, 'show']);

Route::view ('/nosotros', 'about');
Route::view ('/privacidad', 'privacy');
Route::view ('/terminos', 'terms');
Route::view ('/devoluciones', 'refund');
Route::view ('/contacto', 'contact');
Route::view ('/faq', 'faq');

