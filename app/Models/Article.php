<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    //{\"ID_CART\":26,\"CART\":\"F-01\",\"NART\":\"EDREDON CON CORTINAS\",\"CATEGORIA\":\"BLANCOS\",\"MARCA\":\"MIAMI\",\"MODELO\":null,\"COLOR\":null,\"∑\":\"MATRIMONIAL\",\"PRECIOA\":null,\"PRECIOB\":null,\"PRECIOC\":null,\"PRECIOD\":null,\"PRECIOE\":null,\"PRECIOF\":null,\"EXTENCION\":\"jpg\",\"PROV\":1,\"FAB\":0,\"PROMO\":0,\"PMES\":0,\"IDAct\":1}
    protected $fillable = ['ID_CART', 'CART', 'NART', 'CATEGORIA', 'MARCA', 'MODELO', 'COLOR', 'EXTENCION', 'MEDIDAS', 'PRECIOA', 'PRECIOB', 'PRECIOC', 'PRECIOD', 'PRECIOE', 'PRECIOF', 'PROV', 'FAB', 'PROMO', 'PMES', 'IDAct', 'stored_local'];

    public function product_category() 
    {
        return $this->belongsTo(ProductCategory::class, 'product_categories_id');
    }

    public function orders() {
        return $this->belongsToMany(Order::class)>withPivot('quantity');
    }
}
