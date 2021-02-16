<?php

namespace App\Producers;
use App\Producers\Producer;
use App\Models\Article;

class ProductProducer extends Producer
{

    public function load_all_products() {
        $products = $this->run_api_conection("Cat01", '');
        $products = $products["Cat01"];
        $count = 0;
        // return count($products);
        foreach ($products as $product) {
            $count++;
            $article = Article::where("ID_CART", $product["ID_CART"])->first();
            if(!$article){
                Article::create([
                    'ID_CART' => $product['ID_CART'],
                    'CART' => $product['CART'],
                    'NART' => $product['NART'],
                    'CATEGORIA' => $product['CATEGORIA'],
                    'MARCA' => $product['MARCA'],
                    'MODELO' => $product['MODELO'],
                    'COLOR' => $product['COLOR'],
                    'MEDIDAS' => $product['MEDIDAS'],
                    'PRECIOA' => $product['PRECIOA'],
                    'PRECIOB' => $product['PRECIOB'],
                    'PRECIOC' => $product['PRECIOC'],
                    'PRECIOD' => $product['PRECIOD'],
                    'PRECIOE' => $product['PRECIOE'],
                    'PRECIOF' => $product['PRECIOF'],
                    'EXTENCION' => $product['EXTENCION'],
                    'PROV' => $product['PROV'],
                    'FAB' => $product['FAB'],
                    'PROMO' => $product['PROMO'],
                    'PMES' => $product['PMES'],
                    'IDAct' => $product['IDAct'],
                    'stored_local' => 0
                ]);
            }
        }
        return "products insert success ".$count;
    }

    public function update_table_products() {
        $updates = $this->run_api_conection("Updates", '');
        $updates = $updates["Updates"];
        $queryBuilder = "IDAct in (";
        $count = count($updates);
        $index = 0;
        foreach ($updates as $update) {
            $index++;
            if($count == $index) {
                $queryBuilder =  $queryBuilder.$update['IDAct'].',4);';
            } else {
                $queryBuilder = $queryBuilder.$update['IDAct'].',';
            }
        }
        $productsUpdate = $this->run_api_conection("Cat01", $queryBuilder);
        $productsUpdate = $productsUpdate['Cat01'];
        foreach ($productsUpdate as $product) {
            $article = Article::where("ID_CART", $product["ID_CART"])->update([
                'ID_CART' => $product['ID_CART'],
                'CART' => $product['CART'],
                'NART' => $product['NART'],
                'CATEGORIA' => $product['CATEGORIA'],
                'MARCA' => $product['MARCA'],
                'MODELO' => $product['MODELO'],
                'COLOR' => $product['COLOR'],
                'MEDIDAS' => $product['MEDIDAS'],
                'PRECIOA' => $product['PRECIOA'],
                'PRECIOB' => $product['PRECIOB'],
                'PRECIOC' => $product['PRECIOC'],
                'PRECIOD' => $product['PRECIOD'],
                'PRECIOE' => $product['PRECIOE'],
                'PRECIOF' => $product['PRECIOF'],
                'EXTENCION' => $product['EXTENCION'],
                'PROV' => $product['PROV'],
                'FAB' => $product['FAB'],
                'PROMO' => $product['PROMO'],
                'PMES' => $product['PMES'],
                'IDAct' => $product['IDAct'],
                'stored_local' => 0
            ]);
        }
        return "success update products";
    }

    public function add_news_products() {
        // here load news products add on data tables
        return $this->belongsToMany(Order::class)>withPivot('quantity');
    }
}
