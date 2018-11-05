<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Slider as Slider;

class SliderController extends Controller
{
      public function create(Request $request)
    {
      $titulo= $request["titulo"];
      $contenido= $request["contenido"];
      $publico= $request["publico"];
      $posicion= $request["posicion"];
      $url_imagen= $request["url_imagen"];
      $sliders = new Slider;
      $sliders->titulo=$titulo;
      $sliders->contenido=$contenido;
      $sliders->publico=$publico;
      $sliders->posicion=$posicion;
      $nombreArchivo = "img_slider";
      $name_fileoption1 = $nombreArchivo."_".time().'.'.$url_imagen->getClientOriginalExtension();
							$path = public_path().'/images/sliders/';
							$url_imagen->move($path, $name_fileoption1);
      $sliders->url_imagen=$name_fileoption1;
      $sliders->save();
      return redirect()->route("versliders");

    }
    public function list()
    {
         $sliders = DB::table('sliders')
                        ->select(DB::raw('titulo,  IF (publico = "1", "Si", "No") as publico, posicion,  created_at'))
                        ->get();

         return view('Backend.slider',['sliders'=>$sliders]);
    }
    public function form()
    {
        return view('Backend.form.formslider');
    }


}
