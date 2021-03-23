<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Noticias;
use App\Comentarios;
use App\Categorias;
use App\Servicios;
use App\Secciones;
use App\Formatos;
use App\SeccionesCampos;
use App\Campos;
use App\TiposCampos;
use App\Solicitantes;
use App\Solicitud;
use App\Preguntas;
use App\Mail\Contacto;
use App\Mail\EnvioRegistro;
use Mail;
use Carbon\Carbon;
use App\pasarela;
use Illuminate\Support\Facades\Crypt;
use Barryvdh\DomPDF\Facade as PDF;


class homeController extends Controller
{
    public function index(Request $request){
        
        $comentarios = Comentarios::all();
        $slider = Slider::where('publico', 1)->orderBy('posicion', 'ASC')->get();

        $noticias= Noticias::where('publico', 1)->orderBy('posicion', 'ASC')->paginate(6);

        $preguntas = Preguntas::where('publico',1)->limit(3)->orderBy('posicion_pregunta', 'ASC')->get();


        if ($request->ajax()) {
            return view('Frontend.noticias', ['noticias' => $noticias])->render();  
        }

        return view('Frontend.index')->with('noticias', $noticias)->with('slider', $slider)->with('comentarios', $comentarios)->with('preguntas', $preguntas);
    }

    public function blog(){ 

        return view('Frontend.blog');
    }

    public function servicios(Request $request){

        $id = $request['id'];
        $servicios = Servicios::where('categoria_id', $id)->paginate(12);
    
        return view('Frontend.servicios')->with('servicios', $servicios);
    }

    public function contacto(){

        return view('Frontend.contacto');
    }

    public function privacidad(){

        return view('Frontend.privacidad');
    }

    public function tramite(Request $request){

        $id = $request['id'];
        $servicio = Servicios::where('id', $id)->first();
        
        $secciones = Secciones::all();
        $formatos = Formatos::orderBy('posicion_seccion', 'ASC')->get();
        $seccionesCampos = SeccionesCampos::orderBy('posicion_campo', 'asc')->get();
        $campos = Campos::all();
        $tiposCampos = TiposCampos::all();

        return view('Frontend.tramite')->with('servicio', $servicio)->with('secciones', $secciones)->with('formatos', $formatos)->with('seccionesCampos', $seccionesCampos)->with('campos', $campos)->with('tiposcampos', $tiposCampos);
    }

    public function detalle(Request $request){

        $id= $request['id'];
        $noticia = Noticias::where('publico', 1)->where('id',$id)->first();
        $ultimas = Noticias::where('publico', 1)->orderBy('created_at','DESC')->limit(4)->get();

        return view('Frontend.detalle')->with('noticia',$noticia)->with('ultimas',$ultimas);
    }

    public function registrar(Request $request){
        $all = $request->all();

        $idsolicitantes = Solicitantes::max('id_solicitante');

        if ($idsolicitantes == NULL) {
            $idsolicitantes = 0;
            $id = $idsolicitantes + 1;
        }else{
            $id = $idsolicitantes + 1;
        }
        $rand = rand(0,10);
        $hoy = Carbon::now()->format('ymd');
        $id_solicitud = $hoy.$id.$rand.$all['id_servicio'];

        foreach ($all as $key => $valor) {

            if ($key == 3) {

                foreach ($all[$key] as $campo => $val) {
                    $datosBasicos = new Solicitantes;
                    $datosBasicos->id_solicitante = $id;
                    $datosBasicos->id_campo = $campo;
                    $datosBasicos->valor = $val;
                    $datosBasicos->save();

                }
            }elseif((int)$key){

                foreach ($all[$key] as $campo => $val) {
                    

                  $datosSolicitud = new Solicitud;
                  $datosSolicitud->id_solicitud = $id_solicitud;
                  $datosSolicitud->id_solicitante = $id;
                  $datosSolicitud->id_servicio = $all['id_servicio'];
                  $datosSolicitud->id_seccion = $key;
                  $datosSolicitud->id_campo  = $campo;
                  $datosSolicitud->valor  = $val;
                  $datosSolicitud->save();

                }   
            } 
        }  

        $servicio = Servicios::where('id', $all['id_servicio'])->first(); 
        $var = pasarela($id_solicitud, $servicio->monto);
        
        return $var;
    }

    public function preguntas(){
        $preguntas = Preguntas::where('publico',1)->orderBy('posicion_pregunta', 'ASC')->get();
        return view('Frontend.preguntas')->with('preguntas', $preguntas);
    }

    public function pasarelaOK(Request $request){

        if ($request->res == 1) {
            // $id   = Crypt::decrypt($request->id);
            $id   = $request->id;

            $procesar = Solicitud::where('id_solicitud', $id)->update(['status'=> 4]);
            
            Mail::to('info@consuljuridica.com')->send(new EnvioRegistro());
        //info@consuljuridica.com
        }else{

            return redirect()->route('/');
        }

        

        return view('Frontend.pasarelaok');
    }

    public function pasarelaKO(Request $request){
        
        if ($request->res == 2) {
             $id   = $request->id;
            $consulta = Solicitud::where('id_solicitud', $id)->first();
            if (count($consulta) > 0) {
                $elimnarSolicitante = Solicitantes::where('id_solicitante', $consulta->id_solicitante)->delete();
                $eliminar = Solicitud::where('id_solicitud', $id)->delete();
            }else{

                return redirect()->route('/');
            }
            
        }
       
        return view('Frontend.pasarelaKo');
    }

    public function pdf(Request $request){
        $id   = Crypt::decrypt($request->solicitud);
        $id_solicitante = $request->id;
        $id_solicitud = $id;
        $id_servicio = $request->servicio;

        $solicitante= Solicitantes::where('id_solicitante', $id_solicitante)->get();
        $tramite= Solicitud::where('id_solicitud', $id_solicitud)->where('id_solicitante', $id_solicitante)->get();
        //dd($tramite);
        $servicio = Servicios::join('formatos', 'formatos.servicio_id', '=', 'servicios.id')
        ->orderBy('formatos.posicion_seccion', 'ASC')
        ->where('servicios.id', $id_servicio)
        ->get();
        
        foreach ($servicio as $key => $value) {
            if($value->seccion_id==3){
                $secciones_campos= SeccionesCampos::join('secciones', 'secciones.id', '=', 'secciones_campos.seccion_id')
                                                    ->join('campos', 'campos.id', '=', 'secciones_campos.campo_id')
                                                    ->join('tipos_campos', 'tipos_campos.id', '=', 'campos.tipo_campo_id')
                                                    ->where('seccion_id',$value->seccion_id)->get();
                foreach ($secciones_campos as $key3 => $value3) {    
                    foreach ($solicitante as $key2 => $value2) {
                        if($value2->id_campo==$value3->campo_id){
                            $formato_ver[$key][$key3]["id_solicitante"]=$id_solicitante;
                            $formato_ver[$key][$key3]["nombre_servicio"]=$value->titulo_servicio;
                            $formato_ver[$key][$key3]["id_servicio"]=$value->id;
                            $formato_ver[$key][$key3]["nombre_seccion"]=$value3->nombre_seccion;
                            $formato_ver[$key][$key3]["id_seccion"]=$value->seccion_id;
                            $formato_ver[$key][$key3]["nombre_campo"]=$value3->nombre_campo;
                            $formato_ver[$key][$key3]["id_campo"]=$value3->campo_id;
                            $formato_ver[$key][$key3]["tipo_campo"]=$value3->name;                            
                            $formato_ver[$key][$key3]["valor"]=$value2->valor;
                            $formato_ver[$key][$key3]["status"]="";
                        }
                    }
                }
            }
            else{
                $secciones_campos= SeccionesCampos::join('secciones', 'secciones.id', '=', 'secciones_campos.seccion_id')
                                                    ->join('campos', 'campos.id', '=', 'secciones_campos.campo_id')
                                                    ->join('tipos_campos', 'tipos_campos.id', '=', 'campos.tipo_campo_id')
                                                    ->where('seccion_id',$value->seccion_id)->get();
                foreach ($secciones_campos as $key3 => $value3) {                  
                    foreach ($tramite as $key2 => $value2) {
                        if($value2->id_campo==$value3->campo_id){                            
                            $formato_ver[$key][0]["id_solicitante"]=$id_solicitante;
                            $formato_ver[$key][0]["nombre_servicio"]=$value->titulo_servicio;
                            $formato_ver[$key][0]["id_servicio"]=$value->id;
                            $formato_ver[$key][0]["nombre_seccion"]=$value3->nombre_seccion;
                            $formato_ver[$key][0]["id_seccion"]=$value->seccion_id;
                            $formato_ver[$key][0]["nombre_campo"]=$value3->nombre_campo;
                            $formato_ver[$key][0]["id_campo"]=$value3->campo_id; 
                            $formato_ver[$key][0]["tipo_campo"]=$value3->name;                          
                            $formato_ver[$key][0]["valor"]=$value2->valor;
                            $formato_ver[$key][0]["status"]=$value2->status;
                       }
                    }
                }
            }           
        }      
     
      //dd($formato_ver);

        //return view('Backend.form.formtramite',['formato_ver'=>$formato_ver,'status'=>$status_select]); 
        $pdf = PDF::loadView('Frontend.Pdf.solicitud', compact('formato_ver'));
        return $pdf->stream();
    }

    public function pdfBack($id_servicio, $id_solicitud, $id_solicitante){
        //$id   = Crypt::decrypt($request->solicitud);        
        $id_solicitante = $id_solicitante;
        $id_solicitud = $id_solicitud;
        $id_servicio = $id_servicio;

        // dd($id_solicitante);
        $solicitante= Solicitantes::where('id_solicitante', $id_solicitante)->get();
        $tramite= Solicitud::where('id_solicitud', $id_solicitud)->where('id_solicitante', $id_solicitante)->get();
        //dd($tramite);
        $servicio = Servicios::join('formatos', 'formatos.servicio_id', '=', 'servicios.id')
        ->orderBy('formatos.posicion_seccion', 'ASC')
        ->where('servicios.id', $id_servicio)
        ->get();
        
        foreach ($servicio as $key => $value) {
            if($value->seccion_id==3){
                $secciones_campos= SeccionesCampos::join('secciones', 'secciones.id', '=', 'secciones_campos.seccion_id')
                                                    ->join('campos', 'campos.id', '=', 'secciones_campos.campo_id')
                                                    ->join('tipos_campos', 'tipos_campos.id', '=', 'campos.tipo_campo_id')
                                                    ->where('seccion_id',$value->seccion_id)->get();
                foreach ($secciones_campos as $key3 => $value3) {    
                    foreach ($solicitante as $key2 => $value2) {
                        if($value2->id_campo==$value3->campo_id){
                            $formato_ver[$key][$key3]["id_solicitante"]=$id_solicitante;
                            $formato_ver[$key][$key3]["nombre_servicio"]=$value->titulo_servicio;
                            $formato_ver[$key][$key3]["id_servicio"]=$value->id;
                            $formato_ver[$key][$key3]["nombre_seccion"]=$value3->nombre_seccion;
                            $formato_ver[$key][$key3]["id_seccion"]=$value->seccion_id;
                            $formato_ver[$key][$key3]["nombre_campo"]=$value3->nombre_campo;
                            $formato_ver[$key][$key3]["id_campo"]=$value3->campo_id;
                            $formato_ver[$key][$key3]["tipo_campo"]=$value3->name;                            
                            $formato_ver[$key][$key3]["valor"]=$value2->valor;
                            $formato_ver[$key][$key3]["status"]="";
                        }
                    }
                }
            }
            else{
                $secciones_campos= SeccionesCampos::join('secciones', 'secciones.id', '=', 'secciones_campos.seccion_id')
                                                    ->join('campos', 'campos.id', '=', 'secciones_campos.campo_id')
                                                    ->join('tipos_campos', 'tipos_campos.id', '=', 'campos.tipo_campo_id')
                                                    ->where('seccion_id',$value->seccion_id)->get();
                foreach ($secciones_campos as $key3 => $value3) {                  
                    foreach ($tramite as $key2 => $value2) {
                        if($value2->id_campo==$value3->campo_id){                            
                            $formato_ver[$key][0]["id_solicitante"]=$id_solicitante;
                            $formato_ver[$key][0]["nombre_servicio"]=$value->titulo_servicio;
                            $formato_ver[$key][0]["id_servicio"]=$value->id;
                            $formato_ver[$key][0]["nombre_seccion"]=$value3->nombre_seccion;
                            $formato_ver[$key][0]["id_seccion"]=$value->seccion_id;
                            $formato_ver[$key][0]["nombre_campo"]=$value3->nombre_campo;
                            $formato_ver[$key][0]["id_campo"]=$value3->campo_id; 
                            $formato_ver[$key][0]["tipo_campo"]=$value3->name;                          
                            $formato_ver[$key][0]["valor"]=$value2->valor;
                            $formato_ver[$key][0]["status"]=$value2->status;
                       }
                    }
                }
            }           
        }      
     
      //dd($formato_ver);

        //return view('Backend.form.formtramite',['formato_ver'=>$formato_ver,'status'=>$status_select]); 
        $pdf = PDF::loadView('Frontend.Pdf.solicitud', compact('formato_ver'));
        return $pdf->stream();
    }





}
