@extends('layouts.app')
@section('content')
<div class="container">
  <form action="{{route('usuarios.actualizar', $usuario)}}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input name="nombre" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
        value="{{$usuario->name}}">
    </div>

    <div class="form-group">
      <select name="estado" class="custom-select">
        <option selected>estado del usuario</option>
        <option value="1">habilitado</option>
        <option value="0">deshabilitado</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>
@endsection