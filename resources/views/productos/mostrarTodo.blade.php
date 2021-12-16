@extends('layouts.master')

@section('contenido')

    <h1>Lista de Productos</h1>

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
                           
                        </tr>
                    
                    </td>
                    @endforeach
                    
                    
                </tbody>
            </table>
        </div>
    @endif    
@endsection