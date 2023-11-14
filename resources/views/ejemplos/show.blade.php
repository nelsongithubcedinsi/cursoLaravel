@extends('app')
@section('contenido')
    <tr>
        <th>NOMBRE</th>
        <th>EDAD</th>
        <th>TIPO_DOCUMENTO</th>
        <th>DOCUMENTO</th>
    </tr>
    <form action="{{ route('ejemplos.update', ['ejemplo'=>$dato->id])}}" method="post">
        @method("put")
        @csrf
        <input type="text" name="nombre" placeholder="Nombre" value="{{$dato->nombre}}" required>
        <input type="numeric" name="edad" placeholder="Edad" value="{{$dato->edad}}" required>
        <input type="numeric" name="tipo_documento" placeholder="Tipo Documento" value="{{$dato->tipo_documento}}" required>
        <input type="numeric" name="documento" placeholder="Documento" value="{{$dato->documento}}" required>
        <input type="submit" value="Actualizar">
    </form>
@endsection