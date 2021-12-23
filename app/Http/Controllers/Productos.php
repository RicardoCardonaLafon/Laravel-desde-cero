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
        return view('productos.formCrearProducto');
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
        return view('productos.editarProducto')->with([
            'producto'=>Product::findorFail($producto),
        ]);
    }
    public function creaProducto()
    {
        // $producto= Product::create([
        //     'titulo'=>request()->titulo,
        //     'descripcion'=>request()->descripcion,
        //     'precio'=>request()->precio,
        //     'stock'=>request()->stock,
        //     'estado'=>request()->estado,
        // ]);
        $producto=Product::create(request()->all());
        return $producto;
    }
    public function editar($product)
    {
        //dd($producto);
        $product=Product::findorFail($product);

        $product->update(request()->all());
        

        return $product;
    }
    public function eliminarProducto($product)
    {
        //
        $product=Product::findorFail($product);

        $product->delete();

        return $product;
    }

}
