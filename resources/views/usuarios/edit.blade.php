@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Editar {{$usuario->name}}</h4>
        </div>
        <div class="card-body">
             <!-- {{$usuario}}-->
            
            <form action="{{route('usuarios.update',$usuario->id)}}" method="post">
                @csrf
                @method('put')
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputEmail3" name="name" value="{{$usuario->name}}" placeholder="name">
                       
                        @if ($errors->has('name'))
                            <span class="text-danger">{{$errors->first('name')}}</span>
                       
                            @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail3" name="email"  value="{{$usuario->email}}"placeholder="Email">
                        @if ($errors->has('email'))
                        <span class="text-danger">{{$errors->first('email')}}</span>
                   
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection