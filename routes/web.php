<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RappiController;
use App\Http\Controllers\ClientController;

// rappi
Route::get('/get-stores', [RappiController::class, 'getStores']);
Route::get('/get-stores/{id}', [RappiController::class, 'getStore']);
Route::get('/get-products', [RappiController::class, 'getProducts']);
Route::get('/get-products/{sku}', [RappiController::class, 'getProductsOne']);
Route::post('/create-products', [RappiController::class, 'createProducts']);
Route::post('/create-stock', [RappiController::class, 'stockCreate']);
Route::put('/update-stock', [RappiController::class, 'stockUpdate']);
Route::get('/get-stock/{sku}/stores', [RappiController::class, 'stockGet']);
Route::put('/get-stock/{storeId}/{sku}', [RappiController::class, 'stockStatus']);


// client
Route::get('/update-get-products', [ClientController::class, 'productsUpdateAndGetStockPrice']);


