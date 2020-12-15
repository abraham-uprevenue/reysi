<?php

namespace App\Producers;

class Producer
{
    protected $key = "aac6848394063d4fe75c7f85ad550dcb";
    protected $api = "https://proveedorareysi.com/API/v1/";
    
    protected function run_api_conection($route = "Cat01", $filter = ''){
        $data["prkey"] = $this->key; //Selecciona columnas
        if($filter !== '') {
            $data["filter"] = $filter; //Add filter to table
        }
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_URL, $this->api.$route);
        $info = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $output = curl_exec($curl);
        if(!$output){
            die("Connection Failure");
            return "Conection field";
        }
        $info = curl_getinfo($curl);

        $data = explode("\n", $output);
        array_shift($data);
        curl_close($curl);
        $array = json_decode($output, true);
        return $array;
    }
}


// $data["prkey"] = "aac6848394063d4fe75c7f85ad550dcb"; //Selecciona columnas
// //Ordenandolos de manera descente por CART $data[’sort’] = ”CART desc”;
// //Ordenandolos de manera descente por CART $data[’sort’] = ”CART desc”;
// $curl = curl_init();
// curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($curl, CURLOPT_URL, "https://proveedorareysi.com/API/v1/Cat01");
// $response = curl_getinfo($curl, CURLINFO_HTTP_CODE);

// $output = curl_exec($curl);
// if(!$output){
//     die("Connection Failure");
//     return "Conection field";
// }
// $data = explode("\n", $output);
// array_shift($data);

// // return response()->json(["data" => "request succes"]);
// curl_close($curl);
// return response()->json(($output));
// // return view('welcome', [
// //     'products' => $products
// // ]);