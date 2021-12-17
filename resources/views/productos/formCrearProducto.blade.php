@extends('layouts.master')

@section('contenido')
    <h1>Crear un Producto</h1>

    <form method="POST" action={{ route('productos.creaProducto') }} >
        @csrf 
        <div class="form-row">
            <label>Nombre del Producto:</label>
            <input class="form-control"  type="text" name="titulo" required>
        </div>
        <div class="form-row">
            <label>Descripción:</label>
            <input class="form-control"  type="text" name="descripcion" required>
        </div>
        <div class="form-row">
            <label>Precio:</label>
            <input class="form-control"  type="number" min="1.00" step="0.01" name="precio" required>
        </div>
        <div class="form-row">
            <label>Stock:</label>
            <input class="form-control"  type="number" min="0" name="stock" required>
        </div>
        <div class="form-row">
            <label>Estado:</label>
            <select class="custom-select" name="estado" required>
                <option value="" selected>Seleccione estado...</option>
                <option value="available">Disponible</option>
                <option value="unavailable">NO disponible</option>
            </select>
        </div>
        <div class="form-row">
            <button class="btn btn-primary btn-large" type="submit">
                Crear Producto
            </button>
        </div>

    </form>
@endsection