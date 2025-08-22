@extends('app')
@section('title', 'Tienda')
@push('css')
@endpush
@section('contenido')
    <h1>Tienda</h1>
    <ul>
        <li><a href="{{ url('contenido/inicio') }}">Inicio</a></li>
        <li><a href="{{ url('contenido/pedidos') }}">Pedidos</a></li>
        <li><a href="{{ url('contenido/tienda') }}">Tienda</a></li>
        <li><a href="{{ url('contenido/perfil') }}">Perfil</a></li>
        <li><a href="{{ url('/') }}">Cerrar session</a></li>
    </ul>
@endsection
@push('scripts')
@endpush
