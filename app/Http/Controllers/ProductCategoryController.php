<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\Product;

class ProductCategoryController extends Controller
{
    public function index() 
    {
        $categories = ProductCategory::latest()->get();

        return view('categories.index', ['categories' => $categories]);

    }

    public function show($slug)
    {
        $category = ProductCategory::where('slug', $slug)->first();
        $products = Product::where('product_categories_id', $category->id)->latest()->get();
        return view('categories.show', ['products' => $products])->with('category',$category);
    }
}
