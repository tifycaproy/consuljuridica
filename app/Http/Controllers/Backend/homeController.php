<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Slider;

class homeController extends Controller
{
    public function index(){

    	return view('Backend.index');
    }
    public function modulos($name){

      switch ($name) {
        case 'servicios':
          return view('Backend.servicios');
          break;
        case 'register':
        return view('auth.register');
          break;
        case 'nuevanoticia':
          return view('Backend.form.formnoticias');
          break;
        case 'nuevoslider':
          return view('Backend.form.formslider');
          break;

        default:
          // code...
          break;
      }

    }
}
