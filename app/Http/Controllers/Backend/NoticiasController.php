<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Noticias as Noticias;

class NoticiasController extends Controller
{
      public function create(Request $request)
    {
      $titulo= $request["titulo"];
      $resumen= $request["resumen"];
      $descripcion= $request["descripcion"];
      $publico= $request["publico"];
      $posicion= $request["posicion"];
      $url_multimedia= $request["url_multimedia"];
      $url_imagen= $request["url_imagen"];
      $noticias = new Noticias;
      $noticias->titulo=$titulo;
      $noticias->resumen=$resumen;
      $noticias->descripcion=$descripcion;
      $noticias->publico=$publico;
      $noticias->posicion=$posicion;
      if($url_multimedia){
        $noticias->url_multimedia=$url_multimedia;
      }
      else {
        $nombreArchivo = "img_noticia";
        $name_fileoption1 = $nombreArchivo."_".time().'.'.$url_imagen->getClientOriginalExtension();
  							$path = public_path().'/images/noticias/';
  							$url_imagen->move($path, $name_fileoption1);
        $noticias->url_imagen=$name_fileoption1;
      }
      $noticias->save();
      return redirect()->route("vernoticias");
    }
    public function list()
    {
         $noticias = DB::table('noticias')
                        ->select(DB::raw('titulo,  IF (publico = "1", "Si", "No") as publico, posicion,  created_at'))
                        ->get();

         return view('Backend.noticias',['noticias'=>$noticias]);
    }
    public function form()
    {
        return view('Backend.form.formnoticia');
    }
}
