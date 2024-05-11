<?php

namespace App\Http\Controllers;

use App\Models\Carritos;
use App\Models\productos;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function compra($id){

        $producto = productos::where('id', $id)
                    ->first();

        $carrito = Carritos::all();

        // dd($producto);

        return view('compra', compact('producto', 'carrito'));
    }






    public function actualizar(request $request){

        for ($i = 0; $i < $request->cantidad; $i++) {
            Carritos::create([
                'nombre' => $request->nombre,
                'imagen_referencia' => $request->imagen_referencia,
                'cantidad' => '1',
            ]);
        }

        productos::where('id', $request->id)
        ->decrement('cantidad_stock', $request->cantidad);

        $productos = productos::all();

        $carrito = Carritos::all();

        return view('welcome', compact('productos', 'carrito'));

    }






    public function eliminar(request $request){
        // dd($request->id);

        $item = Carritos::where('id', $request->id)->first();
        $item->delete();


        $carrito = Carritos::all();

        return view('carrito', compact('carrito'));

    }
}
