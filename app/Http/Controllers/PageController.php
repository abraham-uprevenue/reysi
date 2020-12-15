<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use GuzzleHttp\Client;
use App\Producers\ProductProducer;

class PageController extends Controller
{
    public function home() {
        $products = Product::take(3)->latest()->get();
        return view('welcome', [
            'products' => $products
        ]);
    }
    
    //
    public function index(\GuzzleHttp\Client $client, ProductProducer $productProducer) {
        // $products = Product::take(3)->latest()->get();
        return response()->json($productProducer->load_all_products());
    }
}
