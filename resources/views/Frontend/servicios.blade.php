@extends ('Frontend.layouts.layouts')

@section('content')

<section class="bottom-banner-w3layouts">
		<div class="container">
			<!---728x90--->

			<h3 class="tittle-wthree text-center">Servicios</h3>
			<!---728x90--->

			<div class="row inner-sec-w3ls-agileinfo">
				<!--left-->
				<div class="col-lg-12 left-blog-info text-left">
					<div class="row mb-4 ">
						@foreach ($servicios as $servicio)
						<div class="col-md-4 card mt-3">
							
							<div class="mt-3 caja-foto"  style=" background-image: url('{{ asset('images/servicios') }}/{{$servicio->url_imagen}}');" class="rounded">
							</div>
								
							
							<div class="card-body">
								<h5 class="card-title " id="tramite-title">
									<a>{{$servicio->titulo_servicio}}</a>
								</h5>
								<ul class="blog-icons my-4">
									<li>
										<a>
											
											<i class="far fa-credit-card"></i>{{$servicio->monto}}</a>
									</li>									
								</ul>
								@php
									echo html_entity_decode($servicio->descripcion_servicio);
								@endphp
								{{-- <p class="card-text">{{$servicio->descripcion_servicio}} </p> --}}
								<div class="read inner mt-4">
									<a href="{{route('tramite',$servicio->id)}}" class="btn btn-sm animated-button victoria-two">Solicitar</a>
								</div>

							</div>
							
						</div>
						@endforeach
					</div>
					
					{{ $servicios->links() }}
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
				</div>
				<!--//left-->
				
			</div>
		</div>

	</section>

@endsection

@push('scripts')

@endpush