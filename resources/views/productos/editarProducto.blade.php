@extends('layouts.master')

@section('contenido')
    <h1>Editar un Producto</h1>

    <form method="POST" action="{{ route('productos.editar',['producto' => $producto->id]) }}" >
        @csrf 
        @method('PUT')
        <div class="form-row">
            <label>Nombre del Producto:</label>
            <input class="form-control"  type="text" name="titulo" value="{{ $producto->titulo }}" required>
        </div>
        <div class="form-row">
            <label>Descripción:</label>
            <input class="form-control"  type="text" name="descripcion" value="{{ $producto->descripcion }}" required>
        </div>
        <div class="form-row">
            <label>Precio:</label>
            <input class="form-control"  type="number" min="1.00" step="0.01" name="precio" value="{{ $producto->precio }}" required>
        </div>
        <div class="form-row">
            <label>Stock:</label>
            <input class="form-control"  type="number" min="0" name="stock" value="{{ $producto->stock }}" required>
        </div>
        <div class="form-row">
            <label>Estado:</label>
            <select class="custom-select" name="estado" required>
                <option {{ $producto->estado == 'available' ? 'selected' : ''}} value="available">Disponible</option>
                <option {{ $producto->estado == 'unavailable' ? 'selected' : ''}} value="unavailable">NO disponible</option>
            </select>
        </div>
        <div class="form-row">
            <button class="btn btn-primary btn-large" type="submit">
                Editar Producto
            </button>
        </div>

    </form>
@endsection