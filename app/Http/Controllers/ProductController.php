<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductController extends Controller
{

    public function index() 
    {
        $products = Product::latest()->get();
        $categories = ProductCategory::orderBy('name')->get();

        return view('products.index', ['products' => $products])->with('categories',$categories);

    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $category = ProductCategory::where('id', $product->product_categories_id)->first();
        return view('products.show', ['product' => $product])->with('category',$category);
    }
}
