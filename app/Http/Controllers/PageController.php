<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use GuzzleHttp\Client;
use App\Producers\ProductProducer;
use App\Producers\CustomerProducer;

class PageController extends Controller
{
    public function home() {
        $products = Product::take(3)->latest()->get();
        return view('welcome', [
            'products' => $products
        ]);
    }
    
    //
    public function index(\GuzzleHttp\Client $client, CustomerProducer $customerProducer) {
        return response()->json($customerProducer->load_all_customer());
    }
}
