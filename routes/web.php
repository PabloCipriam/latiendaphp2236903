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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hola' , function(){
    echo "hola le dijo la araña a la mosca"; 
});

Route::get('paises' , function(){ 
    $paises =[
        "Colombia" => [
            "cap" => "Bogota",
            "mon" => "Peso",
            "pob" => "51.6",
            "ciudades" => [
                "Medallin",
                "Cali" , 
                "Barranquilla"
            ]
        ],
        "Ecuador" => [
            "cap" => "Quito",
            "mon" => "Dolar",
            "pob" => "20",
            "ciudades" => [
                "Cuenca",
                "Guayaquil"
            ]   
        ],
        "Brasil" => [
            "cap" => "Brasilia",
            "mon" => "Dolar",
            "pob" => "20",
            "ciudades" => [
                "Río de Janeiro",
                "Manaos",
                "Sao Paulo",
                "Fortaleza"
            ]   
        ],
        "Argentina" => [
            "cap" => "Quito",
            "mon" => "Dolar",
            "pob" => "20",
            "ciudades" => [
                "Cuenca",
                "Guayaquil"
            ]   
        ]
    ];

    return view('paises')->with('paises', $paises);    
});
