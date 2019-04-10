<!DOCTYPE html>
<html lang="es" style="@yield('body')">

<head>
	<!-- COMMON TAGS -->
	<meta charset="utf-8">
	<title>@isset ($title) {{ $title }} @endisset</title>
	<!-- Search Engine -->
	<meta name="description" content="@isset ($meta_description) {{ $meta_description }} @endisset">
	<meta name="image" content="{{asset('images/logo_consultoria.png')}}">
	<!-- Schema.org for Google -->
	<meta itemprop="name" content="@isset ($meta_name) {{ $meta_name }} @endisset">
	<meta itemprop="description" content="@isset ($meta_description) {{ $meta_description }} @endisset">
	<meta itemprop="image" content="{{asset('images/logo_consultoria.png')}}">
	<!-- Open Graph general (Facebook, Pinterest & Google+) -->
	<meta name="og:title" content="@isset ($meta_name) {{ $meta_name }} @endisset">
	<meta name="og:description" content="@isset ($meta_description) {{ $meta_description }} @endisset">
	<meta name="og:image" content="{{asset('images/logo_consultoria.png')}}">
	<meta name="og:url" content="@isset ($meta_url) {{ $meta_url }} @endisset">
	<meta name="og:site_name" content="@isset ($meta_name) {{ $meta_name }} @endisset ">
	<meta name="og:locale" content="en_ES">
	<meta name="fb:admins" content="@isset ($meta_description) {{ $meta_description }} @endisset">
	<meta name="og:type" content="website">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="" />

	<link rel="shortcut icon" href="{{asset('images/favicon.ico')}} " type="image/x-icon">
	<link href="{{ asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
{{-- 	<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}" type="text/css" media="all"> --}}
	{{-- <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet" type="text/css"> --}}
	<link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('css/blog.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

</head>


</head>

<body style="@yield('body')">

<!-------------------- header ------------------->
<header>
<!-------------------- botones de RRSS ------------------->
	<div id="btn-redes" class="col-1  position-fixed d-md-block d-none">
		<div class="row d-flex justify-content-right align-items-center">
			@isset ($instagram)  
	        <div class="col pt-1 ">
                <a target="blank_" href="{{ $instagram }}" title="Instagram">
                    <img src="https://www.phonealo.com/assets/ig_circle.svg" alt="" class="w-25">
                </a>
            </div>
			@endisset
			 <div class="w-100">

            </div>
			@isset ($facebook) 
			 <div class="col pt-1 ">
                <a target="blank_" href="{{ $facebook }}" title="Facebook">
                     <img src="https://www.phonealo.com/assets/fb_circle.svg" alt="" class="w-25">
                 </a>
            </div>
			@endisset
			<div class="w-100">

            </div>
			@isset ($twitter) 
			<div class="col pt-1 ">
                <a target="blank_" href="{{ $twitter }} " title="Twitter">
                     <img src="https://www.phonealo.com/assets/tw_circle.svg" alt="" class="w-25">
                 </a>
            </div>
			@endisset
            

           

           
		 </div>
	</div>

<!-------------------- //botones de RRSS ------------------->

<!-------------------- menu ------------------->

	<nav class="navbar navbar-expand-lg navbar-light bg-light top-header row p-0 m-0" id="menu">
		
		<div class="py-3 row col-12 col-sm-6">
			<div class="col-9 col-sm-6 p-0 ml-sm-5">
				<a class="" href="{{route('/')}}">
					<img  src="{{asset('images/logo_consultoria.png')}}" class="img-fluid" style="">
				</a>
			</div>

			<div class="col-3 d-sm-none">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fas fa-bars"></i>
					</span>
				</button>
			</div>
		</div>
		

		
		<div class="collapse navbar-collapse col-12 col-sm-auto" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link ml-lg-0" href="{{route('/')}}">Inicio
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
					    aria-expanded="false">
						Servicios
					</a>

					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						@foreach ($categorias as $categoria)
							{{-- expr --}}

						<a class="dropdown-item text-left" href="{{route('servicios',$categoria->id)}}">{{$categoria->nombre_categoria}}</a>
						{{-- <a class="dropdown-item text-left" href="{{route('servicios')}}">Tramites para empresas</a>
						<a class="dropdown-item text-left" href="{{route('servicios')}}">Servicios Consulares para ciudadanos cubanos</a>
						<a class="dropdown-item text-left" href="{{route('servicios')}}">Tramites legales y extranjeria</a> --}}
						@endforeach
					</div>

				</li>

				<li class="nav-item ">
					<a class="nav-link btn-noticias"  role="button"
					    aria-expanded="false">
						Noticias
					</a>
				</li>


				<li class="nav-item">
					<a class="nav-link btn-contacto" >Contacto</a>
				</li>
			</ul>
		</div>
	</nav>
{{--  //menu --}}

</header>

{{--  //header  --}}

@yield('content')

{{-- footer  --}}
	<footer>
		<div class="container">
			<div class="row footer-top">
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Sobre nosotros</h3>
					</div>
					<div class="footer-text">
						<p>@isset ($descripcion) {{ $descripcion }} @endisset</p>
						<a href="{{route('privacidad')}}" title="Políticas de Privacidad" style=" color: #99d9f3">Políticas de Privacidad</a>
						<div class="social-icon footer text-left mt-4">
							<div class="icon-social">
								@isset ($instagram)  
	                			<a href="{{ $instagram }}" class="button-footr">
									<i class="fab fa-instagram"></i>
								</a>
								@endisset
								@isset ($facebook) 
								<a href="{{ $facebook }}" class="button-footr">
									<i class="fab fa-facebook-f"></i>
								</a>
								@endisset	
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Contáctanos</h3>
					</div>
					<div class="contact-info">
						<h4>Dirección :</h4>
						<p>@isset ($direccion) {{ $direccion }} @endisset</p>
						<div class="phone">
							<h4>Contacto :</h4>
							<p>Teléfono : @isset ($telefono) {{ $telefono }} @endisset</p>
							<p>Correo : @isset ($email) {{ $email }} @endisset
								<a href="@isset ($email) {{ $email }} @endisset"></a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Enlaces útiles</h3>
					</div>
					<ul class="links">
						<li >
							<a href="{{route('/')}}">Inicio</a>
						</li >
						<li >
							<a class="btn-noticias" href="#" role="button" >Noticias</a>
						</li>
						<li>
							<a href="">Servicios</a>
						</li>
						<li >
							<a class="btn-contacto" href="#" role="button">Contacto</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Suscríbete</h3>
					</div>
					<div class="footer-text">
						<p>Al suscribirse a nuestra lista de correo, siempre recibirá nuestras últimas noticias y actualizaciones.</p>
						<small class="respuesta"></small>
						<form action="" class="form-newlester" method="post" onsubmit="return false">
							<input class="form-control mail-newlester1" type="email" name="mail" placeholder="Tu correo electrónico..."  required="">

							<button class="btn1 btn-newlester1" type="button">
								<i class="far fa-envelope" aria-hidden="true"></i>
							</button>

							<div class="clearfix"> </div>
						</form>
					</div>
				</div>
			</div>
			<div class="copyright mt-4">
				<p class="copy-right text-center "><script>
                	document.write(new Date().getFullYear())
	            </script> @isset ($title) {{ $title }} @endisset. Todos los Derechos Reservados - Desarrollado por TIFYCA </a>
				</p>
			</div>
		</div>
	</footer>
	<!-------------------- //footer ----------------------------->

	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

	<!-- //Custom-JavaScript-File-Links -->
	<!-- js -->
	<script  src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
	<script  src="{{ asset('js/valida.2.1.7.js') }}"></script>
	<script src="{{ asset('js/bootstrap.js') }}"></script>

	<script type="text/javascript" charset="utf-8">

            //ALMACENA LOS DATOS DE NEWLESTER
            $(".btn-newlester").click(function(){

            	var mail = $("input.mail-newlester").val();

            	console.log(mail);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "post",
                    url: '{{ route('create_newlester') }}',
                    dataType: "json",
                    data: { mail: mail ,_token: '{{csrf_token()}}' },
                    success: function (data){


                        $('.respuesta').html('Email registrado exitosamente').css('color', 'green');
                    },
                     error: function (data) {

                     	var json = data.responseJSON.errors;
			            var error = json['mail'][0];
			            console.log(error)
			            if (error = 'The mail field is required.') {
			            	$('.respuesta').html('El email es requerido').css('color', 'red');
			            }
			            if (error = 'The mail has already been taken.') {
			            	$('.respuesta').html('Este email ya se encuentra registrado').css('color', 'red');
			            }


			        }

                });
            });
            $(".btn-newlester1").click(function(){

            	var mail = $("input.mail-newlester1").val();

            	console.log(mail);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "post",
                    url: '{{ route('create_newlester') }}',
                    dataType: "json",
                    data: { mail: mail ,_token: '{{csrf_token()}}' },
                    success: function (data){


                        $('.respuesta').html('Email registrado exitosamente').css('color', 'green');
                    },
                     error: function (data) {

                     	var json = data.responseJSON.errors;
			            var error = json['mail'][0];
			            console.log(error)
			            if (error = 'The mail field is required.') {
			            	$('.respuesta').html('El email es requerido').css('color', 'red');
			            }
			            if (error = 'The mail has already been taken.') {
			            	$('.respuesta').html('Este email ya se encuentra registrado').css('color', 'red');
			            }


			        }

                });
            });

	$('.btn-noticias').bind("click", function () {
		var destino = $("#section-noticias").offset().top - 1;
		$("html, body").animate({scrollTop: destino},1000);
	});

	$('.btn-contacto').bind("click", function () {
		var destino = $("#section-contacto").offset().top -1;
		$("html, body").animate({scrollTop: destino},1000);
	});

	$('#toTop').bind("click", function () {
		var destino = $("#menu").offset().top -1;
		$("html, body").animate({scrollTop: destino},1000);
	});



	</script>


@stack('scripts')

</body>

</html>
