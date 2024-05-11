<?php

namespace App\Http\Controllers;

use App\Models\Carritos;
use App\Models\productos;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function inicio(){
        $productos = productos::all();
        // dd($productos);

        $carrito = Carritos::all();

        // dd($carrito);

        return view('welcome', compact('productos', 'carrito'));
    }

    public function carrito(){
        $carrito = Carritos::all();

        return view('carrito', compact('carrito'));
    }


}
