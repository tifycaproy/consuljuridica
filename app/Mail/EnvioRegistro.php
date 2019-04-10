<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Solicitantes;
use App\Solicitud;

class EnvioRegistro extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $id   = Crypt::decrypt($request->id);

        $consulta = Solicitud::join('solicitantes','solicitantes.id_solicitante', '=', 'solicitud.id_solicitante')
                                ->where('id_solicitud', $id)
                                //->select('solicitantes.id_campo', 'solicitud.id_solicitud')
                                //->groupBy('solicitantes.id_solicitante')
                                ->get();

        foreach ($consulta as $key => $value) {
            $solicitantesdatos[$value["id_solicitante"]]["id_servicio"]=$value["id_servicio"];   
            $solicitantesdatos[$value["id_solicitante"]]["id_solicitante"]=$value["id_solicitante"];   
             $solicitantesdatos[$value["id_solicitante"]]["id_solicitud"]=$value["id_solicitud"];    
                  
            switch ($value["id_campo"]) {
                case 19:
                $solicitantesdatos[$value["id_solicitante"]]["correo"]=$value["valor"];
                    break;
                    case 3:
                $solicitantesdatos[$value["id_solicitante"]]["nombres"]=$value["valor"];
                    break;
                default:
                    # code...
                    break;
            }  
                 
        }
       //dd($solicitantesdatos);

       foreach($solicitantesdatos as $data){
            $correo = $data['correo'];
            $nombres = $data['nombres'];
            $id_solicitud = $data['id_solicitud'];
            $id_servicio = $data['id_servicio'];
            $id_solicitante = $data['id_solicitante'];
       
       }
       $encrypted = Crypt::encrypt($id_solicitud);
      
       // dd($correo." ".$nombres." ".$id_solicitud);

                return $this->from('info@consuljuridica.com')
                            ->cc($correo)
                            ->view('Frontend.Mail.registro')
                            ->with([
                                    'nombres' => $nombres,
                                    'id_solicitud' => $id_solicitud,
                                    'id_servicio' => $id_servicio,
                                    'id_solicitante' => $id_solicitante,
                                    'encrypted' => $encrypted,
                              ])
                            ->subject('Solicitud Procesada');
        //return $this->view('view.name');
    }
}
