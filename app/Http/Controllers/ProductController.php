<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Article;
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
    //  {"ID_CART":26,"CART":"F-01","NART":"EDREDON CON CORTINAS","CATEGORIA":"BLANCOS","MARCA":"MIAMI","MODELO":null,"COLOR":null,"MEDIDAS":"MATRIMONIAL","PRECIOA":null,"PRECIOB":null,"PRECIOC":null,"PRECIOD":null,"PRECIOE":null,"PRECIOF":null,"EXTENCION":"jpg","PROV":1,"FAB":0,"PROMO":0,"PMES":0}
    public function takeProducts() {
        $products = Article::all();
        return $products;
        return response()->json($output);
    }
}
