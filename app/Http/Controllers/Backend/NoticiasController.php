<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
      $noticia = new Noticias;
      $noticia->titulo=$titulo;
      $noticia->resumen=$resumen;
      $noticia->descripcion=$descripcion;
      $noticia->publico=$publico;
      $noticia->posicion=$posicion;
      $noticia->role_user_id = Auth::id();
      if($url_multimedia){
        $noticia->url_multimedia=$url_multimedia;
      }
      else {
        $nombreArchivo = "img_noticia";
        $name_fileoption1 = $nombreArchivo."_".time().'.'.$url_imagen->getClientOriginalExtension();
  							$path = public_path().'/images/noticias/';
  							$url_imagen->move($path, $name_fileoption1);
        $noticia->url_imagen=$name_fileoption1;
      }
      $noticia->save();
      return redirect()->route("vernoticias");
    }
    public function list()
    {
         $noticia = DB::table('noticias')
                        ->select(DB::raw('id, titulo,  IF (publico = "1", "Si", "No") as publico, posicion,  created_at'))
                        ->get();

         return view('Backend.noticias',['noticias'=>$noticia]);
    }
    public function onesearch($id)
    {
        $noticia = DB::table('noticias')
                  ->where('id', $id)
                  ->first();

        if (!$noticia){
          return view('Backend.index');
        }
        else{
          $noticia = DB::table('noticias')
                         ->select(DB::raw('id, titulo, IF (publico = "1", "checked", "") as publico, resumen, descripcion, posicion,url_multimedia, url_imagen,  created_at'))
                         ->where('id', $id)
                         ->first();
          return view('Backend.form.formnoticiaupdate',['noticia'=>$noticia]);
        }

    }
    public function update(Request $request, $id)
    {
      $noticia = DB::table('noticias')
                ->where('id', $id)
                ->first();

      if (!$noticia){
        return view('Backend.index');
      }
      else{

            $noticia = Noticias::find($id);
            $noticia->titulo=$request["titulo"];
            $noticia->resumen=$request["resumen"];
            $noticia->descripcion=$request["descripcion"];
            $noticia->publico=$request["publico"];
            $noticia->posicion=$request["posicion"];
            $noticia->role_user_id = Auth::id();
            if($request["url_multimedia"]){
              $noticia->url_multimedia=$request["url_multimedia"];
            }
            else {
              $nombreArchivo = "img_noticia";
              $name_fileoption1 = $nombreArchivo."_".time().'.'.$request["url_imagen"]->getClientOriginalExtension();
        							$path = public_path().'/images/noticias/';
        							$request["url_imagen"]->move($path, $name_fileoption1);
              $noticia->url_imagen=$name_fileoption1;
            }
            $noticia->save();
          return redirect()->route("vernoticias");
       }
    }
    public function delete($id)
    {
        DB::table('noticias')->where('id', $id)->delete();

        return redirect()->route("vernoticias");
    }
    public function form()
    {
        return view('Backend.form.formnoticia');
    }
}
