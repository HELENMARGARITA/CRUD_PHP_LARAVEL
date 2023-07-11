@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-lg-6">
                <h1>Agregar Docente</h1>
                <form action="{{route('docente.store')}}"  method="POST">
                    @csrf
                    <label class="form-label">Docente</label>    
<!--                    <input  name="user_id" class="form-control" type="text"><br>-->
                    
                    <select class="form-control" id="user_id" name="user_id">
                        @foreach($usuarios as $usuario)
                        <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                        @endforeach
                    </select>
                    </br>
                    <label for="profesion" class="form-label">Profesión</label>    
                    <input  name="profesion" class="form-control" type="text"><br>
                    
                    <label for="area_trabajo" class="form-label">Area de trabajo</label>    
                    <input  name="area_trabajo" class="form-control" type="text"><br>
                    
                    <label for="blog" class="form-label">Blog</label>
                    <input  name="blog" class="form-control" type="text"><br>
                    
                    <label for="escalafon" class="form-label">Escalafon</label>    
                    <input name="escalafon" class="form-control" type="text"><br>
                    
                    <label for="experiencia" class="form-label">Experiencia</label>    
                    <input name="experiencia" class="form-control" type="text"><br>
                    
                    <label for="idioma" class="form-label">Idioma</label>
                    <input name="idioma" class="form-control" type="text"><br>
                    
                    <label for="telefono" class="form-label">Telefono</label>
                    <input name="telefono" class="form-control" type="text"><br>
                    
                    <input class="btn btn-primary" type="submit" value="Guardar">
                    <a href="{{route('docente.index')}}" class="btn btn-warning">Regresar</a>
                </form>
            </div>
</div>
    
@endsection

