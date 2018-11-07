<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
      $sliders->role_user_id = Auth::id();
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
                        ->select(DB::raw('id,titulo,  IF (publico = "1", "Si", "No") as publico, posicion,  created_at'))
                        ->get();

         return view('Backend.slider',['sliders'=>$sliders]);
    }
    public function onesearch($id)
    {
        $slider = DB::table('sliders')
                  ->where('id', $id)
                  ->first();

        if (!$slider){
          return view('Backend.index');
        }
        else{
          $slider = DB::table('sliders')
                         ->select(DB::raw('id, titulo, IF (publico = "1", "checked", "") as publico, contenido, posicion, url_imagen,  created_at'))
                         ->where('id', $id)
                         ->first();
          return view('Backend.form.formsliderupdate',['slider'=>$slider]);
        }

    }
    public function update(Request $request, $id)
    {
      // dd($request);
      $slider = DB::table('sliders')
                ->where('id', $id)
                ->first();

      if (!$slider){
        return view('Backend.index');
      }
      else{

            $slider = Slider::find($id)
                      ->fill($request->input());
            if($request->hasFile('url_imagen')){
              $nombreArchivo = "img_slider";
              $archivo_img = $nombreArchivo."_".time().'.'.$request["url_imagen"]->getClientOriginalExtension();
                      $path = public_path().'/images/sliders/';
                      $request["url_imagen"]->move($path, $archivo_img);
              $slider->url_imagen = $archivo_img;
            }
            $slider->role_user_id = Auth::id();
            $slider->save()
            ;
          return redirect()->route("versliders");
       }
    }
    public function delete($id)
    {
        DB::table('sliders')->where('id', $id)->delete();

        return redirect()->route("versliders");
    }
    public function form()
    {
        return view('Backend.form.formslider');
    }


}
