<?php

namespace App\Http\Controllers\Backend\Configuraciones;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Configuraciones;

class ConfiguracionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        return view('Backend.configuraciones.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $title = Configuraciones::where('name', 'title')->update(['content'=>$request->title]);
        $telefono = Configuraciones::where('name', 'telefono')->update(['content'=>$request->telefono]);
        $email = Configuraciones::where('name', 'email')->update(['content'=>$request->email]);
        $direccion = Configuraciones::where('name', 'direccion')->update(['content'=>$request->direccion]);
        $ubicacion = Configuraciones::where('name', 'ubicacion')->update(['content'=>$request->ubicacion]);
        $video = Configuraciones::where('name', 'video')->update(['content'=>$request->video]);
        $facebook = Configuraciones::where('name', 'facebook')->update(['content'=>$request->facebook]);
        $twitter = Configuraciones::where('name', 'twitter')->update(['content'=>$request->twitter]);
        $instagram = Configuraciones::where('name', 'instagram')->update(['content'=>$request->instagram]);
        $descripcion = Configuraciones::where('name','descripcion')->update(['content'=>$request->descripcion]);
        $meta_description = Configuraciones::where('name', 'meta_description')->update(['content'=>$request->meta_description]);
        $meta_name = Configuraciones::where('name', 'meta_name')->update(['content'=>$request->meta_name]);
        $meta_url = Configuraciones::where('name', 'meta_url')->update(['content'=>$request->meta_url]);
        $politica_privacidad = Configuraciones::where('name', 'politica_privacidad')->update(['content'=>$request->politica_privacidad]);
        $text_video = Configuraciones::where('name', 'text_video')->update(['content'=>$request->text_video]);

        return redirect()->route('verconfiguraciones');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
