<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class homeController extends Controller
{
    public function admin(){

    	return view('Backend.index');
    }
    public function modulos($name){

      switch ($name) {
        case 'slider':
          $sliders = DB::select('SELECT  titulo,  IF (publico = \'1\', \'Si\', \'No\') as publico, posicion,  created_at  FROM bd_consuljuridica.sliders');
          return view('Backend.slider',['sliders' => $sliders]);
          break;
        case 'servicios':
          return view('Backend.servicios');
          break;
        case 'noticias':
        $noticias = DB::select('SELECT  titulo,  IF (publico = \'1\', \'Si\', \'No\') as publico, posicion,  created_at  FROM bd_consuljuridica.noticias');
          return view('Backend.noticias',['noticias' => $noticias]);
          break;

        default:
          // code...
          break;
      }

    }
}
