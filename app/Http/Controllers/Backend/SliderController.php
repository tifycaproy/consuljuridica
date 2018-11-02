<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider as Slider;

class SliderController extends Controller
{
      public function insert(Request $request)
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

}
