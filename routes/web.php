<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CartController;

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
            "cap" => "Bogotá",
            "mon" => "Peso Colombiano",
            "pob" => "51.6",
            "ciudades" => [
                "Medellín",
                "Cali" , 
                "Barranquilla",
                "Cartagena",
                "Villavicencio",
                "Chocó"
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
            "mon" => "Real Brasileño",
            "pob" => "212.6",
            "ciudades" => [
                "Río de Janeiro",
                "Manaos",
                "Sao Paulo",
                "Fortaleza"
            ]   
        ],
        "Argentina" => [
            "cap" => "Buenos Aires",
            "mon" => "Peso Argentino",
            "pob" => "45.38",
            "ciudades" => [
                "Córdoba",
                "Rosario",
                "Mar de plata"
            ]   
        ],
        "Uruguay" => [
            "cap" => "Montevideo",
            "mon" => "Peso Uruguayo",
            "pob" => "3.4",
            "ciudades" => [
                "Maldonado",
                "Rivera",
                "Paysandú",
                "Artigas",
                "Canelones"
            ]   
        ]
    ];

    return view('paises')->with('paises', $paises);    
});


Route::get('prueba', function(){
    return view('productos.create');
});


/**
 * Rutas REST Producto
 * 
 */

 Route::resource('productos', ProductoController::class);

 Route::resource('cart', CartController::class, ['only' => ['index', 'store', 'destroy']]);