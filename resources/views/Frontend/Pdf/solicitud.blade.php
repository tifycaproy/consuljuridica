<!DOCTYPE html>
<html>
<head>
	<title>Solicitud</title>
	<link href="{{ asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css' />

    <style type="text/css" media="screen">
        tr{
            font-size: .7rem;
          
        }
    </style>
</head>
<body>

   
                @php
                    $img= public_path('images/logo_consultoria.jpg');
                @endphp
             
                <img src="{{ $img }}" width="200px" alt="">
                
    <table class="table table-bordered table-sm">
      <thead>
       
        <tr>
            
          <th colspan="2" align="center"  class="text-center" scope="col">{{$formato_ver[0][0]["nombre_servicio"]}}</th>
        </tr>
      </thead>
      <tbody>

    @foreach ($formato_ver as $key =>$seccion)
        <tr>
           <th scope="show" colspan="2" class="text-center"> {{$seccion[0]["nombre_seccion"]}}</th> 
        </tr>
        @foreach ($seccion as $key2=>$campo)

            @switch($campo["tipo_campo"])
                @case('checkbox')
                     <tr>
                      <td colspan="2" >{{$campo["nombre_campo"]}}</td>
                    </tr>      
                @break                       
                @default
                    <tr>
                      <th width="30%" scope="row">{{$campo["nombre_campo"]}}:</th>
                      <td>{{$campo["valor"]}}</td>
                    </tr>
            @endswitch
        @endforeach
    @endforeach

       

      </tbody>
    </table>

<script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>