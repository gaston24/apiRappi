<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RappiController extends BaseController
{
    // STORES
    public function getStores(Request $request){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => env('API_RAPPI_URL').'/stores',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'api_key: '.env('API_RAPPI_KEY')
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return $this->sendResponse($response,"All stores");
    }

    public function getStore(Request $request){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => env('API_RAPPI_URL').'/stores'.'/'.$request->route('id'),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'api_key: '.env('API_RAPPI_KEY')
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return $this->sendResponse($response,"One store");
    }

    // PRODUCTS
    public function getProducts(Request $request){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => env('API_RAPPI_URL').'/products',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'api_key: '.env('API_RAPPI_KEY')
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return $this->sendResponse($response,"All products");
    }

    public function createProducts(Request $request, $sku, $name, $categories){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => env('API_RAPPI_URL').'/products',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => 'sku='.$sku.'t&name='.$name.'&brand=XL_EXTRA_LARGE&categories='.$categories,
        CURLOPT_HTTPHEADER => array(
            'api_key: '.env('API_RAPPI_KEY'),
            'Content-Type: application/x-www-form-urlencoded'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return $this->sendResponse($response,"Create product");
    }

    public function getProductsOne(Request $request){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => env('API_RAPPI_URL').'/products'.'/'.$request->route('sku'),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'api_key: '.env('API_RAPPI_KEY')
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return $this->sendResponse($response,"One products");
    }

    // STOCK

    public function stockCreate(Request $request, $storeId, $sku, $stock){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => env('API_RAPPI_URL').'/product-stock',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => 'store_id='.$storeId.'&product_sku='.$sku.'&stock='.$stock,
        CURLOPT_HTTPHEADER => array(
            'api_key: '.env('API_RAPPI_KEY'),
            'Content-Type: application/x-www-form-urlencoded'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return $this->sendResponse($response,"Stock create");
    }

    public function stockUpdate(Request $request, $storeId, $sku, $stock){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => env('API_RAPPI_URL').'/product-stock',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => 'store_id='.$storeId.'&product_sku='.$sku.'&stock='.$stock,
        CURLOPT_HTTPHEADER => array(
            'api_key: '.env('API_RAPPI_KEY'),
            'Content-Type: application/x-www-form-urlencoded'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return $this->sendResponse($response,"Stock update");
    }

    public function stockGet(Request $request){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => env('API_RAPPI_URL').'/product_stock'.'/'.$request->route('sku').'/stores',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'api_key: '.env('API_RAPPI_KEY')
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return $this->sendResponse($response,"Return Stock");
    }
    
    public function stockStatus(Request $request, $status){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => env('API_RAPPI_URL').'/product_stock'.'/'.$request->route('storeId').'/'.$request->route('sku'),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_POSTFIELDS => 'enabled='.$status,
        CURLOPT_HTTPHEADER => array(
            'api_key: '.env('API_RAPPI_KEY'), 
            'Content-Type: application/x-www-form-urlencoded'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return $this->sendResponse($response,"Status sku updated");
    }

    

}
