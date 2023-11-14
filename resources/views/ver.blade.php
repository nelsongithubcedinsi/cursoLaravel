@extends('app')
@section('contenido')

@isset($mensaje)
     <h1>{{$mensaje}}</h1>
@endisset
    <tr>
        <th>NOMBRE</th>
        <th>EDAD</th>
        <th>TIPO_DOCUMENTO</th>
        <th>DOCUMENTO</th>
    </tr>
    <form action="{{ url('edita/'.$dato->id) }}" method="post">
        @method("put")
        @csrf
        <input type="text" name="nombre" placeholder="Nombre" value="{{$dato->nombre}}" required>
        <input type="numeric" name="edad" placeholder="Edad" value="{{$dato->edad}}" required>
        <input type="numeric" name="tipo_documento" placeholder="Tipo Documento" value="{{$dato->tipo_documento}}" required>
        <input type="numeric" name="documento" placeholder="Documento" value="{{$dato->documento}}" required>
        <input type="submit" value="Actualizar">
    </form>
@endsection