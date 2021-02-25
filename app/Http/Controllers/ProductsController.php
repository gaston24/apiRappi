<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductsController extends Controller
{
    
    public function articulosNuevos(){

        $articulosNuevos = DB::select("SELECT COD_ARTICU, DESCRIPCIO, DESC_ADIC FROM STA11 
        WHERE COD_ARTICU IN
        (
        SELECT COD_ARTICU FROM ( SELECT TOP 10 COD_ARTICU, COUNT(COD_ARTICU) A FROM GVA53 WHERE FECHA_MOV >= GETDATE()-15 AND COD_ARTICU LIKE '[X]%' GROUP BY COD_ARTICU ORDER BY 2 DESC )A
        )
        ");
        
        foreach ($articulosNuevos as $articulo => $value) {
            echo $value->COD_ARTICU.' ';
            echo $value->DESCRIPCIO.' ';
            echo $value->DESC_ADIC.'<br>';
        }

        $url = 'https://5ff39a8228c3980017b196e3.mockapi.io/v1/datos/';
    
        $client = new \GuzzleHttp\Client();

        $request = $client->post($url, [
            'form_params' => [
                'nombre'=> 'gaston', 
                'apellido'=> 'marcilio',
                'email'=> 'hola@hola.com'
            ]
        ]);
        
        // return $articulosNuevos;
            
    }




}
