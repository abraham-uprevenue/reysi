<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function product_category() 
    {
        return $this->belongsTo(ProductCategory::class, 'product_categories_id');
    }

    public function orders() {
        return $this->belongsToMany(Order::class)>withPivot('quantity');
    }
}
