@extends('app')
@section('contenido')
    <form action="{{ url('crear') }}" method="post">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="numeric" name="edad" placeholder="Edad" required>
        <input type="numeric" name="tipo_documento" placeholder="Tipo Documento" required>
        <input type="numeric" name="documento" placeholder="Documento" required>
        <input type="submit" value="Agregar">
    </form>
@endsection