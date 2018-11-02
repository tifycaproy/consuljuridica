<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homeController extends Controller
{
    public function index(){

    	return view('Frontend.index');
    }

     public function blog(){

    	return view('Frontend.blog');
    }

    public function servicios(){

    	return view('Frontend.servicios');
    }

     public function contacto(){

    	return view('Frontend.contacto');
    }

    public function privacidad(){

            return view('Frontend.privacidad');
        }

public function detalle(){

            return view('Frontend.detalle');
        }

}
