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

    public function takeProducts() {
        $data["prkey"] = "aac6848394063d4fe75c7f85ad550dcb"; //Selecciona columnas
        //Ordenandolos de manera descente por CART $data[’sort’] = ”CART desc”; 
        //Ordenandolos de manera descente por CART $data[’sort’] = ”CART desc”;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_URL, "https://proveedorareysi.com/API/v1/Cat01");
        $response = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        $output = curl_exec($curl);
        if(!$output){
            die("Connection Failure");
            return "Conection field";
        }
        $data = explode("\n", $output);
        array_shift($data);

        // return response()->json(["data" => "request succes"]);
        curl_close($curl);
        return response()->json($output);
    }
}
