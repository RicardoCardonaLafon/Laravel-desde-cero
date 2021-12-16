<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class Productos extends Controller
{
    //
    public function mostrarTodo()
    {
        //$productos=Product::all();
        //dd($productos);
        return view('productos.mostrarTodo')->with([
            'productos'=>$productos=Product::all(),
        ]);
    }
    public function formCrearProducto()
    {
        return 'Formulario para crear un producto desde el CONTROLADOR PRODUCTOS';
    }
    public function mostrarProducto($producto)
    {
        $producto=Product::findorFail($producto);
        
       //dd($producto);

        //return $producto; Devuelve un JSON

        return view('productos.mostrarProducto')->with([
            'producto'=>$producto,
            'html'=>"<h1>www.micc.uy</h1>"
        ]);
    }
    public function formEditarProducto($producto)
    {
        return "Muestra Formulario para editar el Producto {$producto} desde el CONTROLADOR PRODUCTOS";
    }
    public function editarProducto($producto)
    {
        //
    }
    public function eliminarProducto($producto)
    {
        //
    }

}
