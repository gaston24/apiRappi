<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ClientController extends BaseController
{
    public function productsUpdateAndGetStockPrice(){
        $articulosNuevos = DB::select("EXEC SJ_RAPPI_STOCK_PRICE_SP");
        return $articulosNuevos;
    }
}
