<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function clients() {
        return $this->belongsToMany(Client::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
