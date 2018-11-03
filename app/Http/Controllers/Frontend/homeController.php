<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Noticias;

class homeController extends Controller
{
    public function index(){

        $slider = Slider::where('publico', 1)->orderBy('posicion', 'ASC')->get();
        $noticias= Noticias::where('publico', 1)->orderBy('posicion', 'ASC')->paginate(6);

        return view('Frontend.index')->with('noticias', $noticias)->with('slider', $slider);
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

    public function detalle(Request $request){

        $id= $request['id'];
        $noticia = Noticias::where('publico', 1)->where('id',$id)->first();

        $ultimas = Noticias::where('publico', 1)->orderBy('created_at','DESC')->limit(4)->get();

        return view('Frontend.detalle')->with('noticia',$noticia)->with('ultimas',$ultimas);
    }

}
