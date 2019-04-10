@extends ('Frontend.layouts.layouts')

@section('content')

	<!-- contact -->

	<section class="bottom-banner-w3layouts">
		<div class="container">
			<!-- <h3 class="tittle-wthree text-center">Detalle de la Noticia</h3> -->
			<div class="row inner-sec-w3ls-agileinfo">
				<!--left-->
				<div class="col-lg-8 left-blog-info text-left">
						<div class=" detalle" >

							@if ($noticia->url_imagen != NULL)
								<div class="" style="height: 500px; overflow: hidden; background-size: cover; background-image: url('{{ asset('images/noticias') }}/{{ $noticia->url_imagen }}'); background-position: center center "></div>
							@elseif($noticia->url_multimedia != NULL)
								@php
									echo html_entity_decode($noticia->url_multimedia);
								@endphp
							@endif

							
								
							
							<div class="card-body">
								<ul class="blog-icons my-4">
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> {{ $noticia->created_at->format('d-m-Y') }}</a>
									</li>
									

								</ul>
								<h5 class="card-title ">
									<p style="color: black">{{ $noticia->titulo }}</p>
									<small style="color: silver">{{ $noticia->fuente }}</small>
								</h5>
								
								@php
									echo html_entity_decode($noticia->resumen); 
									echo "<br>";
									echo html_entity_decode($noticia->descripcion);
								@endphp
								
							</div>
						</div>
						
						
				</div>
				<!--//left-->
				<!--right-->
				<aside class="col-lg-4 right-blog-con text-left">
					{{-- <div class="tech-btm" style="height: 100px; overflow: hidden; ">
							<img src="images/4.jpg" class="card-img-top img-fluid rounded" alt="">
					</div> --}}
					<div class="tech-btm">
						<h4>Suscríbase a nuestro newsletter</h4>
							
						<form onsubmit="return false" action="#" method="post">
							<small class="respuesta"></small>
							<input class="form-control  mail-newlester" type="email" placeholder="Correo" required="">
							<button type="button" class=" form-control btn btn-primary  btn-newlester">Enviar</button>
						</form>
					</div>
						
							
						
					<h4>Noticias Recientes</h4>
					@foreach ($ultimas as $ultima) 
						<div class="row mt-4">
							<div class="col-6 ultima-aside">
								@if ($ultima->url_imagen != NULL)
									<a href="{{route('detalle',$ultima->id)}}">
										<div class="" style="height: 100px; overflow: hidden; background-image: url('{{ asset('images/noticias') }}/{{ $ultima->url_imagen }}'); background-position: center center; background-size: cover; border-radius: 5px">
										</div>
									</a>
								@elseif($ultima->url_multimedia != NULL)
									@php
										echo html_entity_decode($ultima->url_multimedia);
									@endphp
								@endif
							</div>
							<div class="col-6">
								<h5 style="font-size: .8rem;">
									<a style="color: black" href="{{route('detalle',$ultima->id)}}">{{ $ultima->titulo }}</a>
								</h5>
								<div class="sub-meta">
									<span>
										<i class="far fa-clock"></i> {{ $ultima->created_at->format('d-m-Y') }}</span>
								</div>
							</div>
						</div>
					@endforeach
				</aside>
				<!--//right-->
			</div>
		</div>

	</section>

@endsection

@push('scripts')

@endpush

