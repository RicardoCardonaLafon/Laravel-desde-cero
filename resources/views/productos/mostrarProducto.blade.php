@extends('layouts.master')

@section('contenido')
    <h1>{{ $producto->titulo }} Código: ({{ $producto->id }})</h1>

    <p>{{ $producto->descripcion }}</p>
    <p>{{ $producto->precio }}</p>
    <p>{{ $producto->stock }}</p>
    <p>{{ $producto->estado }}</p>

    {!! $html !!}
    {{-- $html --}}
@endsection
