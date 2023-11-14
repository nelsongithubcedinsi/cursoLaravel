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
    <hr>
    <hr>
    <table>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>EDAD</th>
            <th>TIPO_DOCUMENTO</th>
            <th>DOCUMENTO</th>
            <th>CREADO</th>
            <th>ACTUALIZADO</th>
        </tr>
        @foreach ($datos as $dato)
         <tr>
            <td>{{$dato->id}}</td>
            <td>{{$dato->nombre}}</td>
            <td>{{$dato->edad}}</td>
            <td>{{$dato->tipo_documento}}</td>
            <td>{{$dato->documento}}</td>
            <td>{{$dato->created_at}}</td>
            <td>{{$dato->updated_at}}</td>
            <td>
              <a href="{{url('/vista/'.$dato->id)}}" target = "_blank">Ver Registro</a>
              <form action="{{url('/elimina/'.$dato->id)}}" method="post">
                 @method("delete")
                 @csrf
                 <input type="submit" value="Eliminar">
              </form>
            </td>
         </tr>
        @endforeach
    </table>
@endsection   
