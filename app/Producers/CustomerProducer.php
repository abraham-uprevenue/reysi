<?php

namespace App\Producers;
use App\Producers\Producer;
use App\Models\Article;
use App\Models\Client;

class CustomerProducer extends Producer
{

    public function load_all_customer() {
        $customers = $this->run_api_conection("Cat02", '');
        $customers = $customers["Cat02"];
        $count = 0;
        // return count($customers);
        foreach ($customers as $customer) {
            $count++;
            $client = Client::where("CUSTOMER_ID", $customer["ID"])->first();
            if(!$client){
                Client::create([
                    'CUSTOMER_ID' => $customer['ID'],
                    'IDCli' => $customer['IDCli'],
                    'CCli' => $customer['CCli'],
                    'NCli' => $customer['NCli'],
                    'name' => $customer['NCli'],
                    'Ruta' => $customer['Ruta'],
                    'Origen' => $customer['Origen'],
                    'Saldo' => $customer['Saldo'],
                    'SaldoVen' => $customer['SaldoVen'],
                    'FechaUltAbo' => $customer['FechaUltAbo']
                ]);
            }
        }
        return "customers insert success ".$count;
    }

    public function update_table_customer() {

        return "success update products";
    }
}
