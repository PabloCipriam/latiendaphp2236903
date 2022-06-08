<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!session('cart')){
            echo "no hay items en el carrito";
        }else{
            return view('cart.index');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //estructura de producto
        $producto = [  [
            "prod_id" => $request -> prod_id,
            "cantidad" => $request -> cantidad,
            "nombre_prod" => Producto::find($request->$prod_id)->nombre
         ]
        ];

        
        if(!session('cart')){

            $aux[] = $producto;
            //1. el primer producto en el carrito
            session(['cart' => $producto]);

        }else{
            //- extraer los datos del carrito de la variable sesion
            $aux = session('cart');
            //-eliminar variable de sesion:
            session()->forget('cart');
            //-agregar el nuevo producto a los ya existentes
            $aux[] = $producto;
            //-volver a crear la variable de sesion con el nuevo producto
            session(['cart' => $aux]);
        }
        //redireccion al catalogo de productos 
        //con mensaje de añadido
        return redirect('productos')
                ->with('mensajito', "producto añadido al carrtito");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        session()->forget('cart');
    }
}
