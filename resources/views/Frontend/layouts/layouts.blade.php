<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Inicio | Consultoría Jurídica Miramar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Accrue a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola 	web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="shortcut icon" href="{{asset('images/favicon.png')}} " type="image/x-icon">
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/blog.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

</head>


</head>

<body>
	
<!-------------------- header ------------------->
<header>
<!-------------------- botones de RRSS ------------------->
	<div id="btn-redes" class="col-1  position-fixed d-md-block d-none">
		<div class="row d-flex justify-content-right align-items-center">
            <div class="col pt-1 ">
                <a target="blank_" href="" title="Instagram">
                    <img src="https://www.phonealo.com/assets/ig_circle.svg" alt="" class="w-25">
                </a>
            </div>

            <div class="w-100">
            	
            </div>
            
            <div class="col pt-1 ">
                <a target="blank_" href="https://www.facebook.com/consultoriajuridica.miramar/" title="Facebook">
                     <img src="https://www.phonealo.com/assets/fb_circle.svg" alt="" class="w-25">
                 </a>
            </div>
		 </div>
	</div> 

<!-------------------- //botones de RRSS ------------------->

<!-------------------- menu ------------------->

	<nav class="navbar navbar-expand-lg navbar-light bg-light top-header">
		<h1 class="logo">
			<a class="navbar-brand" href="{{route('/')}}">
				<img  src="{{asset('images/logo_consultoria.png')}}" style="width: 6.5em">
			</a>
		</h1>
			
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
		    aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon">
				<i class="fas fa-bars"></i>
			</span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link ml-lg-0" href="{{route('/')}}">Inicio
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" id="btn-noticias" role="button"
					    aria-expanded="false">
						Noticias
					</a>
					
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="{{route('servicios')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
					    aria-expanded="false">
						Servicios
					</a>
					
				</li>						
				<li class="nav-item">
					<a class="nav-link" id="btn-contacto" href="#">Contacto</a>
				</li>
			</ul>
		</div>
	</nav>
<!-------------------- //menu ------------------->

</header>

<!------------------- //header --------------------------->

@yield('content')

<!--------------------footer------------------------- -->
	<footer>
		<div class="container">
			<div class="row footer-top">
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Sobre nosotros</h3>
					</div>
					<div class="footer-text">
						<p>Especialistas en asuntos legales y empresariales en España, Cuba y Caribe.</p>
						<a href={{route('privacidad')}}" title="Políticas de Privacidad" style=" color: #99d9f3">Políticas de Privacidad</a>
						<div class="social-icon footer text-left mt-4">
							<div class="icon-social">
								<a href="https://www.facebook.com/consultoriajuridica.miramar/" class="button-footr">
									<i class="fab fa-facebook-f"></i>
								</a>
								<a href="#" class="button-footr">
									<i class="fab fa-instagram"></i>
								</a>
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
						<p>Calle Garrigues , no. 2 bajo
									46001 Valencia.</p>
						<div class="phone">
							<h4>Contacto :</h4>
							<p>Teléfono : +34 963 12 26 16</p>
							<p>Correo : info@consuljuridica.com
								<a href="info@consuljuridica.com"></a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 footer-grid-w3ls">
					<div class="footer-title">
						<h3>Enlaces útiles</h3>
					</div>
					<ul class="links">
						<li>
							<a href="{{route('/')}}">Home</a>
						</li>
						<li>
							<a href="{{route('blog')}}">Noticias</a>
						</li>
						<li>
							<a href="{{route('servicios')}}">Servicios</a>
						</li>
						<li>
							<a href="{{route('contacto')}}">Contacto</a>
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
							<input class="form-control mail-newlester" type="email" name="mail" placeholder="Tu correo electrónico..."  required="">

							<button class="btn1 btn-newlester" type="button">
								<i class="far fa-envelope" aria-hidden="true"></i>
							</button>

							<div class="clearfix"> </div>
						</form>
					</div>
				</div>
			</div> 
			<div class="copyright mt-4">
				<p class="copy-right text-center ">&copy; 2018 Consultoría Jurídica. Todos los Derechos Reservados | Desarrollado por TIFYCA </a>
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
	<script  src="js/jquery-2.2.3.min.js"></script>
	
	<!--pop-up-box-->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<script src="js/jquery.magnific-popup.js"></script>
	<!--//pop-up-box-->
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!--//search-bar-->

	
	<!-- //js -->
	<script src="js/bootstrap.js"></script>
	<!--/ start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<script>
		$(document).ready(function () {
			/*
									var defaults = {
										  containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
									 };
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!--// end-smoth-scrolling -->
	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script src="js/jquery-1.7.2.js"></script>
	<script src="js/jquery.quicksand.js"></script>
	<script src="js/script.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->


	<script type="text/javascript" charset="utf-8">
		
            //ALMACENA LOS DATOS DE NEWLESTER
            $(".btn-newlester").click(function(){

            var mail = $("input.mail-newlester").val();

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


	$('#btn-noticias').bind("click", function () {
		var destino = $("#section-noticias").offset().top - 1;
		$("html, body").animate({scrollTop: destino},1000);
	});

	$('#btn-contacto').bind("click", function () {
		var destino = $("#section-contacto").offset().top -1;
		$("html, body").animate({scrollTop: destino},1000);
	});

	</script>
	
<!--slider-->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {

			// Slideshow 1
			$("#slider1").responsiveSlides({
				auto: false,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "centered-btns"
			});

		});
	</script>
	<!--//slider-->
@stack('scripts')

</body>

</html>