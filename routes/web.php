<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RappiController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MainController;

// rappi
Route::get('/get-stores', [RappiController::class, 'getStores']); //ok
Route::get('/get-stores/{id}', [RappiController::class, 'getStore']); //ok
Route::get('/get-products', [RappiController::class, 'getProducts']); //ok
Route::get('/get-products/{sku}', [RappiController::class, 'getProductsOne']); //ok
Route::post('/create-products', [RappiController::class, 'createProducts']); //ok
Route::post('/create-stock', [RappiController::class, 'stockCreate']); //ok
Route::post('/update-stock', [RappiController::class, 'stockUpdate']); //ok
Route::get('/get-stock/{sku}/stores', [RappiController::class, 'stockGet']); 
Route::put('/get-stock/{storeId}/{sku}', [RappiController::class, 'stockStatus']);


// client
Route::get('/update-get-products', [ClientController::class, 'productsUpdateAndGetStockPrice']);

// main
Route::get('/update', [MainController::class, 'update']);
Route::get('/create', [MainController::class, 'createProducts']);
