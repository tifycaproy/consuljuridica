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
					<div class="row mb-4">
						<div class="col-md-4 card">
							<a>
								<img src="images/4.jpg" class="card-img-top img-fluid rounded" alt="">
							</a>
							<div class="card-body">
								<h5 class="card-title " id="tramite-title">
									<a>Titulo del Servicio</a>
								</h5>
								<ul class="blog-icons my-4">
									<li>
										<a>
											<i class="far fa-credit-card"></i> $1000</a>
									</li>									
								</ul>
								
								<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
								<div class="read inner mt-4">
									<a href="{{route('tramite')}}" class="btn btn-sm animated-button victoria-two">Solicitar</a>
								</div>

							</div>
						</div>
						<div class="col-md-4 card">
							<a>
								<img src="images/5.jpg" class="card-img-top img-fluid rounded" alt="">
							</a>
							<div class="card-body">
								<h5 class="card-title " id="tramite-title">
									<a>Titulo del Servicio</a>
								</h5>
								<ul class="blog-icons my-4">
									<li>
										<a>
											<i class="far fa-credit-card"></i> $1000</a>
									</li>																		
								</ul>								
								<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
								<div class="read inner mt-4">
									<a href="{{route('tramite')}}" class="btn btn-sm animated-button victoria-two">Solicitar</a>
								</div>
							</div>
						</div>


						<div class="col-md-4 card">
							<a>
								<img src="images/6.jpg" class="card-img-top img-fluid rounded" alt="">
							</a>
							<div class="card-body">
								<h5 class="card-title " id="tramite-title">
									<a>Titulo del Servicio</a>
								</h5>
								<ul class="blog-icons my-4">
									<li>
										<a>
											<i class="far fa-credit-card"></i> $1000</a>
									</li>									
								</ul>
								
								<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
								<div class="read inner mt-4">
									<a href="{{route('tramite')}}" class="btn btn-sm animated-button victoria-two">Solicitar</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row mb-4">
						<div class="col-md-4 card">
							<a>
								<img src="images/7.jpg" class="card-img-top img-fluid rounded" alt="">
							</a>
							<div class="card-body">
								<h5 class="card-title " id="tramite-title">
									<a>Titulo del Servicio</a>
								</h5>
								<ul class="blog-icons my-4">
									<li>
										<a>
											<i class="far fa-credit-card"></i> $1000</a>
									</li>																		
								</ul>								
								<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
								<div class="read inner mt-4">
									<a href="{{route('tramite')}}" class="btn btn-sm animated-button victoria-two">Solicitar</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 card">
							<a>
								<img src="images/5.jpg" class="card-img-top img-fluid rounded" alt="">
							</a>
							<div class="card-body">
								<h5 class="card-title " id="tramite-title">
									<a>Titulo del Servicio</a>
								</h5>
								<ul class="blog-icons my-4">
									<li>
										<a href="#">
											<i class="far fa-credit-card"></i> $1000</a>
									</li>									
								</ul>								
								<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
								<div class="read inner mt-4">
									<a href="{{route('tramite')}}" class="btn btn-sm animated-button victoria-two">Solicitar</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 card">
							<a>
								<img src="images/4.jpg" class="card-img-top img-fluid rounded" alt="">
							</a>
							<div class="card-body">
								<h5 class="card-title " id="tramite-title">
									<a>Titulo del Servicio</a>
								</h5>
								<ul class="blog-icons my-4">
									<li>
										<a>
										<i class="far fa-credit-card"></i> $1000</a>
									</li>
								</ul>								
								<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
								<div class="read inner mt-4">
									<a href="{{route('tramite')}}" class="btn btn-sm animated-button victoria-two">Solicitar</a>
								</div>
							</div>
						</div>
					</div>
					<nav aria-label="Page navigation example">
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
					</nav>
				</div>
				<!--//left-->
				
			</div>
		</div>

	</section>

@endsection

@push('scripts')

@endpush