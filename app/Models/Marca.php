<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    //relacionar una marca con los productos

    function productos(){
        
        //retornar los productos de la marca
        return $this -> hasMany(Producto::class);

    }
}
