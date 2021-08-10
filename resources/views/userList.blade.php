@extends('template')
@section('content')
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>DNI</th>
            <th>Correo electrónico</th>
            <th>Teléfono</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>DNI</th>
            <th>Correo electrónico</th>
            <th>Teléfono</th>
        </tr>
    </tfoot>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->nombre}}</td>
            <td>{{$usuario->apellido}}</td>
            <td>{{$usuario->dni}}</td>
            <td>{{$usuario->correo}}</td>
            <td>{{$usuario->telefono}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection