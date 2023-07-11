@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div align="center">
                        <h1>CRUD PHP LARAVEL</h1>
                        <a class="btn btn-primary btn-lg" href="{{ route('user.index') }}">Gestión Usuarios</a>
                        <a class="btn btn-secondary btn-lg" href="{{ route('docente.index') }}">Gestión Docentes</a>
                        </br>
                        <img height="350" width="550" src="{{ asset('img/logo-udec-contorno-negro.png') }}" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
