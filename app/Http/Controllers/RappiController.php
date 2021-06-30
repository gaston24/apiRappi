<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RappiController extends BaseController
{
    // STORES
    public function getStores()
    {
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

        return $response;
    }

    public function getStore($numSuc)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => env('API_RAPPI_URL').'/stores'.'/'.$numSuc,
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

        return $response;
    }

    // PRODUCTS
    public function getProducts()
    {
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

        return $response;
    }

    public function createProducts($sku, $name, $categories)
    {
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

        return $response;
    }

    public function getProductsOne($sku)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => env('API_RAPPI_URL').'/products'.'/'.$sku,
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

        return $response;
    }

    // STOCK

    public function stockCreate($storeId, $sku, $stock)
    {
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

        return $response;
    }

    public function stockUpdate($storeId, $sku, $stock)
    {
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

        return $response;
    }

    public function stockGet($sku)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => env('API_RAPPI_URL').'/product_stock'.'/'.$sku.'/stores',
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

        return $response;
    }
    
    public function stockStatus($status, $storeId, $sku)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => env('API_RAPPI_URL').'/product_stock'.'/'.$storeId.'/'.$sku,
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

        return $response;
    }

    

}
