@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    <h1>Usuarios</h1>
    <a class="btn btn-success" href="{{ route('user.create') }}">Agregar Usuario</a>
    <br>
    <br>
    <div class="row justify-content-center">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">USUARIO</th>
                    <th class="text-center">NOMBRE DE USUARIO</th>
<!--                    <th class="text-center">APELLIDOS</th>-->
                    <th class="text-center">GENERO</th>
                    <th class="text-center">EMAIL</th>
                    <th class="text-center">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                <tr>
                    <td class="text-center">{{ $usuario->id}}</td>
                    <td class="text-center">{{ $usuario->email}}</td>
                    <td class="text-center">{{ $usuario->name}}</td>
                    
                    <td class="text-center">{{ $usuario->genero}}</td>
                    <td class="text-center">{{ $usuario->email}}</td>
                    <td>
                        <a href="{{route('user.edit', ['user'=>$usuario->id])}}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('user.destroy', $usuario->id) }}" method ="POST" >
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" value="Eliminar">
                        </form>
<!--                        <a class="btn btn-danger" onclick="eliminar($usuario->id)">Remover</a>-->
                    </td>
                </tr>
                @endforeach 
            </tbody>
        </table>
        <a class="btn btn-secondary btn-lg" href="{{ route('home') }}">Volver a menú principal</a>
            </div>
        </div>
    
@endsection
