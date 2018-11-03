@extends ('Frontend.layouts.layouts')

@section('content')
@php
	use Carbon\Carbon;
@endphp

<!-- banner-text -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			 {{--  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol> --}}

			  <div class="carousel-inner">

			  	@php
			  		$longitud = count($slider);
			  	@endphp
			  	@for ($i = 0; $i < $longitud ; $i++)
			  		
			  @if ($i == 0)
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="{{ asset('images/sliders') }}/{{ $slider[$i]->url_imagen }}" alt="{{$slider[$i]->titulo}}">
			      <div class="carousel-caption d-none d-md-block">

			      	<div class="banner-info" style="padding-top: 7em;" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out 0s;">
							<h3>{{$slider[$i]->titulo}}</h3>
							<p> <b>{{ $slider[$i]->contenido }}</b></p>
						</div>
				  </div>
			    </div>
			    @endif
			    @if ($i > 0)
			    	<div class="carousel-item">
			      <img class="d-block w-100" src="{{ asset('images/sliders') }}/{{ $slider[$i]->url_imagen }}" alt="{{$slider[$i]->titulo}}">
			      <div class="carousel-caption d-none d-md-block">

			      	<div class="banner-info" style="padding-top: 7em;" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out 0s;">
							<h3>{{$slider[$i]->titulo}}</h3>
							<p> <b>{{ $slider[$i]->contenido }}</b></p>
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
				<div class="col-lg-4 service-in text-center">
					<div class="card">
						<div class="card-body">
							<i class="fab fa-react"></i>
							<h5 class="card-title">Servicios Consulares para ciudadanos cubanos</h5>
							<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore.
							</p>

						</div>
					</div>
				</div>
				<div class="col-lg-4 service-in text-center">
					<div class="card">
						<div class="card-body">
							<i class="fab fa-strava"></i>
							<h5 class="card-title">Solicitud de documentos a Cuba</h5>
							<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore.
							</p>


						</div>
					</div>
				</div>
				<div class="col-lg-4 service-in text-center">
					<div class="card">
						<div class="card-body">
							<i class="far fa-hand-spock"></i>
							<h5 class="card-title">Tramites legales y extranjeria</h5>
							<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore.
							</p>

						</div>
					</div>
				</div>
				

			</div>
		</div>
	</section>
<!---------------//servicios--------------->

<!---------------video--------------->
<section class="testimonials bottom-banner-w3layouts">
<div class="row-green" id="quees">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center py-2 py-sm-5">
          <div class="col-12 col-sm-6 col-md-6 col-lg-6  pl-2-xs" style="color: white">
              <h2>What is Lorem Ipsum?</h2>
              <h6>Er it and wants to have it, simply because it is pain..."
				Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h6>
          </div>
          <div class="col-12 col-md-6  text-center mt-3 mt-sm-0 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/idrNWh4aCC0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
				<div class="col-lg-12 left-blog-info text-left">
					<div class="row mb-4">

						@foreach ($noticias as $noticia)
						
						<div class="col-md-4 card"> 
							
								<img src="{{ asset('images/noticias') }}/{{ $noticia->url_imagen }}" class="card-img-top img-fluid rounded" alt="">

							
							<div class="card-body">
								<ul class="blog-icons my-4">
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> {{ $noticia->created_at->format('d-m-Y') }}</a>
									</li>
									
								</ul>
								<h5 class="card-title ">
									<a href="{{route('detalle',$noticia->id)}}">{{ $noticia->titulo }}</a>
								</h5>
								<p class="card-text">{{ $noticia->resumen }} </p>
								<div class="read inner mt-4">
									<a href="{{route('detalle',$noticia->id)}}" class="btn btn-sm animated-button victoria-two">Leer más</a>
								</div>

							</div>
						</div>
						
						@endforeach

						
					</div>
					
				
					{{-- <nav aria-label="Page navigation example">
						<ul class="pagination justify-content-left mt-4">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1">Previous</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">1</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">2</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">3</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">Next</a>
							</li>
						</ul>
					</nav> --}}

					{{ $noticias->links() }}
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
			    <div class="carousel-item active">
			     <div class="owl-item" style="width: 1110px; margin-right: 20px;">
			     	<div class="item">
						<div class="feedback-info text-left">
							<div class="feedback-top rounded">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna
									Sed semper leo metus, a lacinia eros semper at.</p>
							</div>
							<div class="feedback-grids">
								<div class="feedback-img">
									<img src="images/t3.jpg" class="img-fluid rounded-circle" alt="">
								</div>
								<div class="feedback-img-info">
									<h5>Steven Wilson</h5>
									<p>United States
										<span>(Company)</span>
									</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			    </div>
			    <div class="carousel-item">
			      
					<div class="owl-item" style="width: 1110px; margin-right: 20px;">
			     	<div class="item">
						<div class="feedback-info text-left">
							<div class="feedback-top rounded">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna
									Sed semper leo metus, a lacinia eros semper at.</p>
							</div>
							<div class="feedback-grids">
								<div class="feedback-img">
									<img src="images/t2.jpg" class="img-fluid rounded-circle" alt="">
								</div>
								<div class="feedback-img-info">
									<h5>Steven Wilson</h5>
									<p>United States
										<span>(Company)</span>
									</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>

			    </div>
			    <div class="carousel-item">
			      
					<div class="owl-item" style="width: 1110px; margin-right: 20px;">
			     	<div class="item">
						<div class="feedback-info text-left">
							<div class="feedback-top rounded">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna
									Sed semper leo metus, a lacinia eros semper at.</p>
							</div>
							<div class="feedback-grids">
								<div class="feedback-img">
									<img src="images/t1.jpg" class="img-fluid rounded-circle" alt="">
								</div>
								<div class="feedback-img-info">
									<h5>Steven Wilson</h5>
									<p>United States
										<span>(Company)</span>
									</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>

			    </div>
			  </div>
			</div>
			{{-- <div class="inner-sec-w3ls-agileinfo">
				<div class="owl-carousel owl-theme owl-loaded owl-drag">
					
					
					

				<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3390px;"><div class="owl-item active" style="width: 1110px; margin-right: 20px;"><div class="item">
						<div class="feedback-info text-left">
							<div class="feedback-top rounded">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna
									Sed semper leo metus, a lacinia eros semper at.</p>
							</div>
							<div class="feedback-grids">
								<div class="feedback-img">
									<img src="images/t1.jpg" class="img-fluid rounded-circle" alt="">
								</div>
								<div class="feedback-img-info">
									<h5>Mary Jane</h5>
									<p>United States
										<span>(Company)</span>
									</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div></div><div class="owl-item" style="width: 1110px; margin-right: 20px;"><div class="item">
						<div class="feedback-info text-left">
							<div class="feedback-top rounded">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna
									Sed semper leo metus, a lacinia eros semper at.</p>
							</div>
							<div class="feedback-grids">
								<div class="feedback-img">
									<img src="images/t3.jpg" class="img-fluid rounded-circle" alt="">
								</div>
								<div class="feedback-img-info">
									<h5>Steven Wilson</h5>
									<p>United States
										<span>(Company)</span>
									</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div></div><div class="owl-item" style="width: 1110px; margin-right: 20px;"><div class="item">
						<div class="feedback-info text-left">
							<div class="feedback-top rounded">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna
									Sed semper leo metus, a lacinia eros semper at.</p>
							</div>
							<div class="feedback-grids">
								<div class="feedback-img">
									<img src="images/t3.jpg" class="img-fluid rounded-circle" alt="">
								</div>
								<div class="feedback-img-info">
									<h5>Peter guptill</h5>
									<p>Vestibulum</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
			</div> --}}
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
            
          <div class=" col-12 col-sm-2 col-md-4">
            <div class="col-12">
              <h2>Lorem</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            
          </div>
          <div class=" col-12 col-sm-2 col-md-4">
            <h2>Lorem</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia unde omnis, laudantium? Maxime, nesciunt aspernatur! Illo necessitatibus kdjdj </p>
          </div>
          <div class=" col-12 col-md-4">
            <h2>Lorem</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia unde omnis, laudantium? Maxime, nesciunt aspernatur! Illo necessitatibus</p>
          </div>
        
          
          <div class="col-12 col-sm-9"></div>
          <div class="col-12 col-sm-3 text-right"><a href="#" title="">Ver más</a></div>
        </div>
       
    </div>

</div>
<!------------//preguntas--------------->

<!------------contacto--------------->

	<section class="bottom-banner-w3layouts contact" id="section-contacto">
		<h3 class="tittle-wthree text-center"> Contacto </h3>
		<div class="inner-sec-w3ls-agileinfo">
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3079.9355109270514!2d-0.3804463846326256!3d39.47078557948625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604f4c731d5149%3A0x8e41269162b4f923!2sConsultor%C3%ADa+Jur%C3%ADdica+Miramar!5e0!3m2!1ses!2sve!4v1541173324480" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				<div class="main_grid_contact">
					<div class="form">
						<h4 class="mb-4 text-center">contacta con nosotros</h4>
						<form action="" method="post" id="form-contacto" onsubmit="return false">
							<div class="form-group">
								<label class="my-2">Nombre</label>
								<input class="form-control" type="text" id="name-contacto" name="name-contacto" placeholder="" required="">
							</div>
							<div class="form-group">
								<label>Correo Electrónico</label>
								<input class="form-control" type="email" id="mail-contacto" name="mail-contacto" placeholder="" required="">
							</div>
							<div class="form-group">
								<label>Mensaje</label>
								<textarea placeholder="" id="mensaje-contacto" name="mensaje-contacto"></textarea>
							</div>
							<div class="input-group1">
								<input class="form-control" type="submit" value="Enviar" id="btn-contacto">
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
 								<p> Calle Garrigues , no. 2 bajo
									46001 Valencia</p>
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
									<a href="info@consuljuridica.com"> info@consuljuridica.com</a>
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
								<p>+34 963 12 26 16</p>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!------------//contacto--------------->


<section class="bottom-banner-w3layouts contact " style="padding-top: 1em; padding-bottom:0em;">
	
		<div class="col-12">
			<div class=" d-flex justify-content-center">
				 <div class="row d-flex align-items-center">
				 	<div class="col-sm-4" style="padding: 0px 120px 20px 120px">
				 		<a href="http://valencuba.com/">
				 			<img class="col-sm-12 gris opacidad"  src="{{asset('images/logo_valencuba.png')}}">
				 		</a>
				 	</div>
				 	<div class="col-sm-4" style="padding: 0px 120px 20px 120px">
				 		<a href="http://cubairestravel.com/">
							<img class="col-sm-12 gris opacidad"  src="{{asset('images/logo_cubaires.png')}}">
						</a>
					</div>
					<div class="col-sm-4" style="padding: 0px 120px 20px 120px">
						<a href="http://cubairestravel.com/">
							<img class="col-sm-12 gris opacidad"  src="{{asset('images/logo_luxury.png')}}" > 
						</a>
					</div>
				 </div>
					
				
			</div>
		</div>		
	</section>
	
@endsection



@push('scripts')



<!-- carousel -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 1,
						nav: false
					},
					900: {
						items: 1,
						nav: false
					},
					1000: {
						items: 1,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		});


		$('#form-contacto').submit(function() {
			
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
                            
                        console.log(data);
                        //$('.respuesta').html('Email registrado exitosamente').css('color', 'green');
                    },
                     error: function (data) {

                     	console.log('error', data);

                     	var json = data.responseJSON.errors;
			            //var error = json['mail'][0];

			            //$('.respuesta').html('Este email ya se encuentra registrado').css('color', 'red');
			        }

                });

			
		});
	</script>
	<!-- //carousel -->


@endpush



 
   


