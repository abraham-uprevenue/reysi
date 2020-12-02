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

Route::get('/categorias', [App\Http\Controllers\ProductCategoryController::class, 'index']);
Route::get('/categorias/{categoria}', [App\Http\Controllers\ProductCategoryController::class, 'show']);

Route::view ('/nosotros', 'about');
Route::view ('/privacidad', 'privacy');
Route::view ('/terminos', 'terms');
Route::view ('/devoluciones', 'refund');
Route::view ('/contacto', 'contact');
Route::view ('/faq', 'faq');

Route::get('/test', function () {
    $data['prkey'] = "aac6848394063d4fe75c7f85ad550dcb";
    $data['columns'] = 'ID CART,CART,NART';
    $data['filter'] = "CART like 'F %'";
//Ordenandolos de manera descente por CART
    $data['sort'] = "CART desc";
    $curl = curl_init ();
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_URL, "https://proveedorareysi.com/API/v1/Cat01");
    $result = curl_exec($curl);
    print_r($result);
    if (! $result ){die("Connection Failure");}
    curl_close ($curl );
});

