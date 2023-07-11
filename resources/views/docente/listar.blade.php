@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    <h1>Docentes</h1>
    <a class="btn btn-success" href="{{ route('docente.create') }}">Agregar docente</a>
    <br>
    <br>
    <div class="row justify-content-center">
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">DOCENTE</th>
                        <th class="text-center">TELEFONO</th>
                        <th class="text-center">PROFESION</th>
                        <th class="text-center">EXPERIENCIA</th>
                        <th class="text-center">ESCALAFON</th>
                        <th class="text-center">BLOG</th>
                        <th class="text-center">IDIOMA</th>
                        <th class="text-center">AREA DE TRABAJO</th>
                        <th class="text-center">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($docentes as $docente)
                    <tr>
                        <td class="text-center" >{{$docente->id}}</td>
                        <td class="text-center" >{{$docente->user->name}}</td>
                        <td class="text-center" >{{$docente->telefono}}</td>
                        <td class="text-center" >{{$docente->profesion}}</td>
                        <td class="text-center" >{{$docente->experiencia}}</td>
                        <td class="text-center" >{{$docente->escalafon}}</td>
                        <td class="text-center" >{{$docente->blog}}</td>
                        <td class="text-center" >{{$docente->idioma}}</td>
                        <td class="text-center" >{{$docente->area_trabajo}}</td>
                        <td>
                            <a href="{{ route ('docente.edit', ['docente'=>$docente->id])}}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('docente.destroy', $docente->id) }}" method ="POST" >
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <input type="submit" value="Eliminar">
                            </form>
<!--                            <a href="#"  class="btn btn-danger">Remover</a>-->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="btn btn-secondary btn-lg" href="{{ route('home') }}">Volver a menú principal</a>
            </div>
        </div>
    
@endsection