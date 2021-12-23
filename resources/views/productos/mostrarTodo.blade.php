@extends('layouts.master')

@section('contenido')

    <h1>Lista de Productos</h1>
    <a class="btn btn-success" href="{{ route('productos.formCrearProducto') }}">Crear</a>

    @if(empty($productos))
        <div class="alert alert-warning">
            Lista de productos vacía!
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Estado</th>
                        <th>Acción</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto->id }}</td>
                            <td>{{ $producto->titulo }}</td>
                            <td>{{ $producto->descripcion }}</td>
                            <td>{{ $producto->precio }}</td>
                            <td>{{ $producto->stock }}</td>
                            <td>{{ $producto->estado }}</td>
                            <td><a class="btn btn-link" href="{{ route('productos.mostrarProducto',['producto'=>$producto->id]) }}">Ver</a></td>
                            <td><a class="btn btn-link" href="{{ route('productos.formEditarProducto',['producto'=>$producto->id]) }}">Editar</a></td>
                            <td>
                                <form method="POST" action="{{ route('productos.eliminarProducto',['producto' => $producto->id]) }}">
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link">Borrar</button>
                                </form>
                            </td>
                        </tr>
                    
                    </td>
                    @endforeach
                    
                    
                </tbody>
            </table>
        </div>
    @endif    
@endsection