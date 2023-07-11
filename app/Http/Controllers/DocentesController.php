<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\docente;
use App\User;

class DocentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes = docente::all();
        return view('docente.listar', compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::all();
        return view('docente.agregar', compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = $request->input('user_id');
        $profesion = $request->input('profesion');
        $blog = $request->input('blog');
        $idioma = $request->input('idioma');
        $area_trabajo = $request->input('area_trabajo');
        $experiencia = $request->input('experiencia');
        $telefono = $request->input('telefono');
        $escalafon = $request->input('escalafon');
        
        $docente = new docente();
        
        $docente->user_id = $user_id;
        $docente->profesion = $profesion;
        $docente->blog = $blog;
        $docente->idioma = $idioma; 
        $docente->area_trabajo = $area_trabajo;
        $docente->experiencia = $experiencia;
        $docente->telefono = $telefono;
        $docente->escalafon = $escalafon;
        
        $docente->save();
        
        return redirect()->route('docente.index')
                         ->with(['message'=>'Docente creado!!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docente = docente::findOrFail($id);
        return view('docente.editar', compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $user_id = $request->input('user_id');
        $profesion = $request->input('profesion');
        $blog = $request->input('blog');
        $idioma = $request->input('idioma');
        $area_trabajo = $request->input('area_trabajo');
        $experiencia = $request->input('experiencia');
        $telefono = $request->input('telefono');
        $escalafon = $request->input('escalafon');
        
        
        $docente = docente::findOrFail($id);
        
        $docente->user_id = $user_id;
        $docente->profesion = $profesion;
        $docente->blog = $blog;
        $docente->idioma = $idioma; 
        $docente->area_trabajo = $area_trabajo;
        $docente->experiencia = $experiencia;
        $docente->telefono = $telefono;
        $docente->escalafon = $escalafon;
        
        $docente->update();
        
        return redirect()->route('docente.index')
                         ->with(['message'=>'Docente Actualizado!!']);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docente = docente::findOrFail($id);
        $docente->delete();
        return redirect()->route('docente.index')
                         ->with(['message'=>'Docente eliminado con éxito!!']);
    }
}
