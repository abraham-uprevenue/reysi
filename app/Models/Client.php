<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['CUSTOMER_ID', 'IDCli', 'CCli', 'NCli', 'name', 'Ruta', 'Origen', 'Saldo', 'SaldoVen', 'FechaUltAbo'];


    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
