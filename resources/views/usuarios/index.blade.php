 <!-- {{$usuarios}}-->
@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
    <div class="card-header">
    <h4 class="card-title float-left">Lista de Usuarios </h4>
            <a href="{{route('usuarios.create')}}" class="btn btn-sm btn-success float-right"><i class="fa fa-plus-circle"></i> Nuevo Usuario</a>


    </div>
    <div class="card-body">
    <table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach($usuarios as $usuario)
    <tr>
      <th scope="row">1</th>
      <td>{{$usuario->name}}</td>
      <td>{{$usuario->email}}</td>
      <td><a href="{{route('usuarios.edit',$usuario->id)}}" type="button" class="btn btn-warning">Editar</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

    </div>
    
</div>
</div>
@endsection