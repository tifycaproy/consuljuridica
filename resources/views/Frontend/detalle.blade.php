@extends ('Frontend.layouts.layouts')

@section('content')

	<!-- contact -->

	<section class="bottom-banner-w3layouts">
		<div class="container">
			<!-- <h3 class="tittle-wthree text-center">Detalle de la Noticia</h3> -->
			<div class="row inner-sec-w3ls-agileinfo">
				<!--left-->
				<div class="col-lg-8 left-blog-info text-left">
						<div class="card">
							<a href="single.html">
								<img src="{{ asset('images/noticias') }}/{{ $noticia->url_imagen }}" class="card-img-top img-fluid rounded" alt="">
							</a>
							<div class="card-body">
								<ul class="blog-icons my-4">
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> {{ $noticia->created_at->format('d-m-Y') }}</a>
									</li>
									

								</ul>
								<h5 class="card-title ">
									<a href="single.html">{{ $noticia->titulo }}</a>
								</h5>
								<p class="card-text">{{ $noticia->resumen }}</p>
								
								<p>
								{{ $noticia->descripcion }}</p>
							</div>
						</div>
						
						
				</div>
				<!--//left-->
				<!--right-->
				<aside class="col-lg-4 right-blog-con text-left">
					<div class="right-blog-info text-left">
						<div class="tech-btm">
							<img src="images/4.jpg" class="card-img-top img-fluid rounded" alt="">
						</div>
						<div class="tech-btm">
							<h4>Suscríbase a nuestro newsletter</h4>
							
							<form onsubmit="return false" action="#" method="post">
								<small class="respuesta"></small>
								<input class="form-control  mail-newlester" type="email" placeholder="Correo" required="">
								<button type="button" class=" form-control btn btn-primary  btn-newlester">Enviar</button>
							</form>

						</div>
						
							
						</div>
						
						<div class="tech-btm">
							<h4>Noticias Recientes</h4>
							@foreach ($ultimas as $ultima) 
								{{-- expr --}}
							
							<div class="blog-grids row mb-3 text-left">
								<div class="col-md-5 blog-grid-left">
									<a href="{{route('detalle',$ultima->id)}}">
										<img src="{{ asset('images/noticias') }}/{{ $ultima->url_imagen }}" class="card-img-top img-fluid rounded" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">

									<h5>
										<a href="{{route('detalle',$ultima->id)}}">{{ $ultima->titulo }}</a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> {{ $ultima->created_at->format('d-m-Y') }}</span>
									</div>
								</div>

							</div>

							@endforeach
							
							
						</div>
					</div>
				</aside>
				<!--//right-->
			</div>
		</div>

	</section>

@endsection

@push('scripts')

@endpush

ssing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
							</div>
						</div>
						
						
				</div>
				<!--//left-->
				<!--right-->
				<aside class="col-lg-4 right-blog-con text-left">
					<div class="right-blog-info text-left">
						<div class="tech-btm">
							<img src="images/4.jpg" class="card-img-top img-fluid rounded" alt="">
						</div>
						<div class="tech-btm">
							<h4>Suscríbase a nuestro newsletter</h4>
							
							<form onsubmit="return false" action="#" method="post">
								<small class="respuesta"></small>
								<input class="form-control  mail-newlester" type="email" placeholder="Correo" required="">
								<button type="button" class=" form-control btn btn-primary  btn-newlester">Enviar</button>
							</form>

						</div>
						
							
						</div>
						
						<div class="tech-btm">
							<h4>Noticias Recientes</h4>

							<div class="blog-grids row mb-3 text-left">
								<div class="col-md-5 blog-grid-left">
									<a href="single.html">
										<img src="images/4.jpg" class="card-img-top img-fluid rounded" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">

									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Jan, 2018</span>
									</div>
								</div>

							</div>
							<div class="blog-grids row mb-3 text-left">
								<div class="col-md-5 blog-grid-left">
									<a href="single.html">
										<img src="images/5.jpg" class="card-img-top img-fluid rounded" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">

									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Jan, 2018</span>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="blog-grids row mb-3 text-left">
								<div class="col-md-5 blog-grid-left">
									<a href="single.html">
										<img src="images/6.jpg" class="card-img-top img-fluid rounded" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">
									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Feb, 2018</span>
									</div>
								</div>

							</div>
						</div>
					</div>
				</aside>
				<!--//right-->
			</div>
		</div>

	</section>

@endsection

@push('scripts')

@endpush

