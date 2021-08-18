<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;

class ProductoController extends Controller
{
    public function index(){
        return view("Inventario.productos");
    }

    public function registrar(Request $request){
        
        $proveedor= $request->input("proveedor");
        $nombre = $request->input("nombre");
        $costo = $request->input("costo");
        $medida = $request->input("medida");
        $cantidad = $request->input("cantidad");
        $color = $request->input("color");
        $cost_un = $request->input("costo_u");

        $producto = new producto();
        $producto->id_proveedor = $proveedor;
        $producto->nombre = $nombre;
        $producto->costo = $costo;
        $producto->medida = $medida;
        $producto->cantidad = $cantidad;
        $producto->color = $color;
        $producto->costo_u = $cost_un;
        $producto->save();

        return redirect()->route('producto.index')
        ->with([
            'message' => 'Producto registrado correctamente'
        ]);;
    }

    public function consulta(){
        return view("Inventario.consulta");
    }
}
