<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function update()
    {
        $articulosUpdatables = app('App\Http\Controllers\ClientController')->productsUpdateAndGetStockPrice();

        $response = [];
        $suma = 1;

        foreach ($articulosUpdatables as $key => $value) {
            
            $response[$suma] = app('App\Http\Controllers\RappiController')->stockUpdate(
                // $value->NUM_SUC, 
                17287522,
                $value->COD_ARTICU, 
                $value->CANT_STOCK, 
                $value->PRICE
            );
            
            $suma++;
        }

        return $response;
    }

    public function createProducts()
    {
        $articulosUpdatables = app('App\Http\Controllers\ClientController')->productsUpdateAndGetStockPrice();

        $response = [];
        $suma = 1;

        foreach ($articulosUpdatables as $key => $value) {
            
            $response[$suma] = app('App\Http\Controllers\RappiController')->createProducts(
                $value->COD_ARTICU, 
                'nombre'.$suma, 
                'carteras'
            );
            
            $suma++;
        }

        return $response;
    }

}
