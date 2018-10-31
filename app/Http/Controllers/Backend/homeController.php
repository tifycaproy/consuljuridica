<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homeController extends Controller
{
    public function admin(){

    	return view('Backend.index');
    }
    public function modulos($name){

      switch ($name) {
        case 'slider':
          return view('Backend.slider');
          break;
        case 'servicios':
          return view('Backend.servicios');
          break;
        case 'noticias':
          return view('Backend.noticias');
          break;

        default:
          // code...
          break;
      }

    }
}
