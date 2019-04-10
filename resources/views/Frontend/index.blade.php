@extends ('Frontend.layouts.layouts')

@section('content')
@php
	use Carbon\Carbon;
@endphp

<!-- banner-text -->
<div class="alert alert-success alert-dismissible fade show" id="alert"  role="alert" style="position: fixed; z-index: 999999; top: 10px; left: 35%; display: none">
  <strong>Mensaje enviado exitosamente</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
			 {{--  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol> --}}

			  <div class="carousel-inner"  >

			  	@php
			  		$longitud = count($slider);
			  	@endphp
			  	@for ($i = 0; $i < $longitud ; $i++)

			  @if ($i == 0)
			    <div class="carousel-item active h-slider"style="" >
			      <img class="d-block w-100" src="{{ asset('images/sliders') }}/{{ $slider[$i]->url_imagen }}" alt="{{$slider[$i]->titulo}}">
			      <div class="carousel-caption d-none d-md-block">

			      	<div class="banner-info" style="padding-top: 7em;" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out 0s;">
			      			@if ($slider[$i]->servicio_id != NULL)
			      				<a href="{{route('tramite',$slider[$i]->servicio_id)}}" title=""><h3>{{$slider[$i]->titulo}}</h3></a>
			      			@else
								<h3>{{$slider[$i]->titulo}}</h3>
			      			@endif

							@php
								echo '<b>'.html_entity_decode($slider[$i]->contenido).'<b>';
							@endphp

							@if ($slider[$i]->contenido2 != NULL)
								@php
									echo '<b>'.html_entity_decode($slider[$i]->contenido2).'<b>';
								@endphp
							@endif

						</div>
				  </div>
			    </div>
			    @endif
			    @if ($i > 0)
			    	<div class="carousel-item h-slider" >
			      <img class="d-block w-100" src="{{ asset('images/sliders') }}/{{ $slider[$i]->url_imagen }}" alt="{{$slider[$i]->titulo}}">
			      <div class="carousel-caption d-none d-md-block">

			      	<div class="banner-info" style="padding-top: 7em;" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out 0s;">
							@if ($slider[$i]->servicio_id != NULL)
			      				<a href="{{route('tramite',$slider[$i]->servicio_id)}}" title=""><h3>{{$slider[$i]->titulo}}</h3></a>
			      			@else
								<h3>{{$slider[$i]->titulo}}</h3>
			      			@endif
							@php
								echo '<b>'.html_entity_decode($slider[$i]->contenido).'<b>';
							@endphp
							@if ($slider[$i]->contenido2 != NULL)
								@php
									echo '<b>'.html_entity_decode($slider[$i]->contenido2).'<b>';
								@endphp
							@endif
						</div>
				  </div>
			    </div>
			    @endif
			 	@endfor

			  </div>
			</div>


	<span><span></span></span>

	<!--/bottom-banner-w3layouts-->

	<section class="bottom-banner-w3layouts bg-light py-md-5 py-3">
		<div class="container">
			<div class="row choose-main py-md-5 py-3">
				<div class="col-lg-6 feature text-right">
					<h3>
						<span></span>Asesoramiento y apoyo en la gestión</h3>
					<p>El personal de la <strong>Consultoría Jurídica Miramar S.L. </strong>en destino, un equipo humano con amplia experiencia en el mercado cubano, ofrece el asesoramiento necesario para el desarrollo del proyecto en el país, así como la asistencia legal y el apoyo necesario para superar las barreras que surgen en el acceso a un nuevo mercado. </p>
				</div>
				<div class="col-lg-6 feature fea-slider text-left">
					<img src="images/2.jpg" class="img-fluid rounded" alt="">
				</div>

				<div class="col-lg-6 feature fea-slider text-right">
					<img src="images/3.jpg" class="img-fluid rounded" alt="">
				</div>
				<div class="col-lg-6 feature text-left mt-5">
					<h3>
						Infraestructura tecnológica</h3>
					<p>Los Centros Empresariales de la <strong>Consultoría Jurídica Miramar S.L. </strong>cuentan con estructuras y puestos de trabajo totalmente equipados con todos los medios tecnológicos e instrumentos necesarios para que la empresa pueda desarrollar, desde un principio su proyecto rápida y eficazmente.</p>
				</div>
			</div>


			</div>
		</div>
	</section>

<!-----------/servicios-------------->
	<section class="bottom-banner-w3layouts services">
		<div class="container">
			<h3 class="tittle-wthree cen text-center">Servicios</h3>
			<div class="row inner-sec-w3ls-agileinfo">

				<div class="col-lg-3 service-in text-center">
					<div class="card">
						<div class="card-body">
							<a href="{{route('servicios',1)}}" title="">
								<i class="fas fa-file-alt" style="font-size: 3rem"></i>
								<h5 class="card-title">Solicitud de documentos a Cuba</h5>
							</a>
							
							{{-- <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore.
							</p> --}}
						</div>
					</div>
				</div>
				<div class="col-lg-3 service-in text-center">
					<div class="card">
						<div class="card-body">
							<a href="{{route('servicios',2)}}" title="">
								<i class="fas fa-building" style="font-size: 3rem"></i>
							<h5 class="card-title">Tramites para empresas</h5>
							</a>
							
							{{-- <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore.
							</p> --}}
						</div>
					</div>
				</div>
				<div class="col-lg-3 service-in text-center">
					<div class="card">
						<div class="card-body">
							<a href="{{route('servicios',3)}}" title="">
								<i class="fas fa-users" style="font-size: 3rem"></i>
								<h5 class="card-title">Servicios Consulares para ciudadanos Cubanos</h5>	
							</a>
							
							{{-- <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore.
							</p> --}}
						</div>
					</div>
				</div>
				<div class="col-lg-3 service-in text-center">
					<div class="card">
						<div class="card-body">
							<a href="{{route('servicios',4)}}" title="">
								<i class="fas fa-gavel" style="font-size: 3rem"></i>
								<h5 class="card-title">Tramites legales y extranjeria</h5>
							</a>
							
							{{-- <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore.
							</p> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!---------------//servicios--------------->

<!---------------video--------------->
<section class="testimonials bottom-banner-w3layouts" style="">
<div class="row-green" id="quees">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center py-2 py-sm-5">
          <div class="col-12 col-sm-6 col-md-6 col-lg-6  pl-2-xs" style="color: white">
              @isset ($text_video)
             <h2>{{ $text_video }}</h2>
				 @endisset
              
          </div>
          <div class="col-12 col-md-6  text-center mt-3 mt-sm-0 " id="video">
          	@isset ($video)
				@php
					echo html_entity_decode($video);
				@endphp
			@endisset
            {{-- <iframe class="video-youtube" width="560" height="315" src="https://www.youtube.com/embed/idrNWh4aCC0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
          </div>
        </div>
    </div>
</div>
</section>
<!---------------//video--------------->

<!---------------Blog--------------->

	<section class="bottom-banner-w3layouts" id="section-noticias">
		<div class="container">
			<!---728x90--->

			<h3 class="tittle-wthree text-center">Noticias</h3>
			<!---728x90--->

			<div class="row inner-sec-w3ls-agileinfo">
				<!--left-->
				<div class="col-lg-12 left-blog-info text-left articles p-0" >
					@include('Frontend.noticias')
				</div>
				<!--//left-->

			</div>
		</div>

	</section>
<!---------------//Blog--------------->

<section class="testimonials bottom-banner-w3layouts">
		<div class="container">
			<h3 class="tittle-wthree cen text-center mb-5">Lo que nuestros clientes dicen</h3>

			<div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
			  {{-- <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol> --}}
			  <div class="carousel-inner">
			  	@php
			  		$longitud = count($comentarios);
			  	@endphp
			  	@for ($i = 0; $i < $longitud ; $i++)

			  @if ($i == 0)
			    <div class="carousel-item active">
				     <div class="owl-item" style="width: 1110px; margin-right: 20px;">
				     	<div class="item">
							<div class="feedback-info text-left">
								<div class="feedback-top rounded">
									@php
										echo html_entity_decode($comentarios[$i]->contenido);
									@endphp
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img src="{{ asset('images/comentarios') }}/{{$comentarios[$i]->url_imagen}}" class="img-fluid rounded-circle" alt="">
									</div>
									<div class="feedback-img-info">
										<h5>{{$comentarios[$i]->nombre}}</h5>
										<p>{{$comentarios[$i]->procedencia}}</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</div>
			    </div>
			    @endif
			     @if ($i > 0)
				<div class="carousel-item">
				     <div class="owl-item" style="width: 1110px; margin-right: 20px;">
				     	<div class="item">
							<div class="feedback-info text-left">
								<div class="feedback-top rounded"  style="color: white !important">
									<small style="color: white !important">
									@php
										echo html_entity_decode($comentarios[$i]->contenido);
									@endphp
									</small>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img src="{{ asset('images/comentarios') }}/{{$comentarios[$i]->url_imagen}}" class="img-fluid rounded-circle" alt="">
									</div>
									<div class="feedback-img-info">
										<h5>{{$comentarios[$i]->nombre}}</h5>
										<p>{{$comentarios[$i]->procedencia}}</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</div>
			    </div>
			    @endif
			    @endfor
			  </div>
			</div>
		</div>
	</section>

<!------------newsletter--------------->


<div class="text-center d-flex justify-content-center py-5" >
	<div class="col-lg-6 text-center d-flex justify-content-center ">
		<div class="comment-top">
			<h2>¡Suscríbete!</h2><br>
			<p>Para estar informado de todas nuestras novedades, noticias y ofertas dese de alta en nuestra Newsletter.</p><br>
			<div class="comment-bottom mail-newlester">
				<form  onsubmit="return false" action="#" method="post">
					<small class="respuesta"></small>
					<input class="form-control mail-newlester" type="email" name="mail" placeholder="Tu correo electrónico..." required="">
					<button type="button" class="btn btn-primary submit btn-newlester">Enviar</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!------------//newsletter--------------->

<!------------preguntas--------------->

<div class="" style="background: #F6F7FA">
    <div class="container">

      <h1 class="c-black text-center py-5 title-h1">Preguntas Frecuentes</h1>
        <div class="row pb-5">

        	@foreach ($preguntas as $pregunta)
        		 <div class=" col-12 col-sm-2 col-md-4">
		            <div class="col-12">
		              <h2>{{ $pregunta->pregunta }}</h2>
		              @php
						echo html_entity_decode($pregunta->respuesta);
					@endphp
		            </div>
		          </div>
        	@endforeach

          <div class="col-12 col-sm-9"></div>
          <div class="col-12 col-sm-3 text-right"><a href="{{ route('preguntasF') }}" title="">Ver más</a></div>
        </div>

    </div>

</div>
<!------------//preguntas--------------->

<!------------contacto--------------->

	<section class="bottom-banner-w3layouts contact" id="section-contacto">
		<h3 class="tittle-wthree text-center"> Contacto </h3>
		<div class="inner-sec-w3ls-agileinfo">
			<div class="map">
				@isset ($ubicacion)
					@php
						echo html_entity_decode($ubicacion);
					@endphp
				 @endisset
				{{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3079.9355109270514!2d-0.3804463846326256!3d39.47078557948625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604f4c731d5149%3A0x8e41269162b4f923!2sConsultor%C3%ADa+Jur%C3%ADdica+Miramar!5e0!3m2!1ses!2sve!4v1541173324480" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
				<div class="main_grid_contact">
					<div class="form">
						<h4 class="mb-4 text-center">contacta con nosotros</h4>
						<span class="respuesta-contacto"></span>
						<form action="" method="get" id="form-contacto" onsubmit="return false">
							<div class="form-group">
								<label class="my-2">Nombre</label>
								<input class="form-control" type="text" id="name-contacto" name="name-contacto" placeholder="" required="" filter="texto" data-invalid="Ingrese solo letras">
							</div>
							<div class="form-group">
								<label>Correo Electrónico</label>
								<input class="form-control" type="email" id="mail-contacto" name="mail-contacto" placeholder="" required="" filter="email" data-invalid="example@mail.com">
							</div>
							<div class="form-group">
								<label>Mensaje</label>
								<textarea placeholder="" id="mensaje-contacto" name="mensaje-contacto" filter="texto" data-invalid="Ingrese solo letras y numeros"></textarea>
							</div>
							<div class="input-group1 text-center">	
								<img src="{{ asset('images/loading.gif') }}" alt="" class="col-2 d-none loading" >
								<input class="form-control" type="submit" value="Enviar " id="btn-contacto">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="address row">
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-map"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6 class="ad-info text-uppercase mb-2">Dirección</h6>
 								<p>@isset ($direccion) {{ $direccion }} @endisset</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-envelope"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6 class="ad-info text-uppercase mb-2">Correo</h6> <br>
								<p>
									<a href="@isset ($email) {{ $email }} @endisset"> @isset ($email) {{ $email }} @endisset</a>
								</p>
							</div>

						</div>
					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="fas fa-mobile-alt"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6 class="ad-info text-uppercase mb-2">Teléfono</h6><br>
								<p>@isset ($telefono) {{ $telefono }} @endisset</p>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!------------//contacto--------------->

<!------------logos--------------->
<section class="bottom-banner-w3layouts contact " style="padding:3em;">
	<div class="container">
		<div class="row d-flex align-items-center">
			<div class="col-4 text-center">
				<a href="http://valencuba.com/">
				 	<img class="col-8 gris opacidad"  src="{{asset('images/logo_valencuba.png')}}">
				</a>
			</div>
			<div class="col-4 text-center">
				<a href="http://cubairestravel.com/">
					<img class="col-8 gris opacidad"  src="{{asset('images/logo_cubaires.png')}}">
				</a>
			</div>
			<div class="col-4 text-center">
				<a href="http://valencuba.com/">
					<img class="col-8 gris opacidad"  src="{{asset('images/logo_luxury.png')}}" >
				</a>
			</div>
		</div>
	</div>
</section>
<!------------//logos--------------->

@endsection



@push('scripts')


<script>
	jQuery(document).ready(function(){
       $('#form-contacto').valida();
    });
    
	var load = '{{ asset('images/loading.gif') }}';
	$(function() {
	    $('body').on('click', '.pagination a', function(e) {
	        e.preventDefault();

	        var url = $(this).attr('href');  
	        getArticles(url);
	        window.history.pushState("", "", url);
	    });

	    function getArticles(url) {
	        $.ajax({
	            url : url  
	        }).done(function (data) {
	            $('.articles').html(data);  
	        }).fail(function () {
	            alert('Articles could not be loaded.');
	        });
	    }
	});


		$('#form-contacto').submit(function() {

			$('.loading').removeClass('d-none');
			$("#btn-contacto").addClass('d-none');

			var name 	= $('input#name-contacto').val();
			var mail 	= $('input#mail-contacto').val();
			var mensaje = $('textarea#mensaje-contacto').val();

			$.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "post",
                    url: '{{ route('send_mail') }}',
                    dataType: "json",
                    data: { name: name,mail: mail ,mensaje: mensaje,_token: '{{csrf_token()}}' },
                    success: function (data){

                        if (data == 1) {
                        	
							$(".loading").addClass('d-none');
							$("#btn-contacto").removeClass('d-none');

                        	$("#alert").css("display","block");
                  			$("#alert").fadeIn( 300 ).delay( 1500 ).fadeOut( 1500 );

                        }else{
                        	//$('.respuesta-contacto').html('El mensaje no pudo ser enviado, intente nuevamente').css('color', 'red');
                        }
                        
                    }

                });


		});
	</script>
	<!-- //carousel -->


@endpush
