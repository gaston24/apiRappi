<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiRappi;

Route::namespace('App\\Http\\Controllers')->group(function () {
    
    Route::get('/', function(){
        return 'test ok';
    });

    Route::get('/get-stores', [ApiRappi::class, 'getStores']);
    Route::get('/get-stores/{id}', [ApiRappi::class, 'getStore']);
    
    Route::get('/get-products', [ApiRappi::class, 'getProducts']);
    Route::get('/get-products/{sku}', [ApiRappi::class, 'getProductsOne']);
    Route::post('/create-products', [ApiRappi::class, 'createProducts']);
    
    Route::post('/create-stock', [ApiRappi::class, 'stockCreate']);
    Route::put('/update-stock', [ApiRappi::class, 'stockUpdate']);
    
    Route::get('/get-stock/{sku}/stores', [ApiRappi::class, 'stockGet']);
    Route::put('/get-stock/{storeId}/{sku}', [ApiRappi::class, 'stockStatus']);
    
});
