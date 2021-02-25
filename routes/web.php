<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('welcome'); });

Route::get('/articulosNuevos', 'ProductsController@articulosNuevos')->name('articulosNuevos');



Route::get('/httpclient/get/{id?}', function($id=null){
    $url = 'https://5ff39a8228c3980017b196e3.mockapi.io/v1/datos/';
    
    $client = new \GuzzleHttp\Client();
    $request = $client->get($url.$id);
    $response = $request->getBody();

    return $response;

});


Route::get('/httpclient/post', function(){
    $url = 'https://5ff39a8228c3980017b196e3.mockapi.io/v1/datos/';
    
    $client = new \GuzzleHttp\Client();

    $request = $client->post($url, [
        'form_params' => [
            'nombre'=> 'gaston', 
            'apellido'=> 'marcilio',
            'email'=> 'hola@hola.com'
        ]
    ]);

    $response = $request->getBody();
    // return $response;
    return redirect('/httpclient/get/');
    
});
