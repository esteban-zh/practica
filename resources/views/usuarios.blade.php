@extends('layouts.app')
@section('content')
<h1>usuarios</h1>
<div class="container">

  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>e-mail</th>
        <th>verificacion</th>
        <th>habilitacion</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($datos as $usuario)

      <tr>
        <td scope="row">{{$usuario->id}}</td>
        <td scope="row">{{$usuario->name}}</td>
        <td scope="row">{{$usuario->email}}</td>
        @if ($usuario->email_verified_at)
        <td>verificado</td>
        @else
        <td>no verificado</td>
        @endif
        @if ($usuario->enable)
        <td>habilitado</td>
        @else
        <td>no habilitado</td>
        @endif
        <td scope="row">{{$usuario->habilitacion}}</td>
        <td><a href="{{route('usuarios.editar', $usuario)}}">editar</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection