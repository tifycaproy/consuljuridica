@extends ('Frontend.layouts.layouts')

@section('content')

<section class="bottom-banner-w3layouts contact">
		<h3 class="tittle-wthree text-center"> Contacto </h3>
		<div class="inner-sec-w3ls-agileinfo">
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.27404345275!2d-118.69191921441556!3d34.02016130939095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522474296007" allowfullscreen=""></iframe>
				<div class="main_grid_contact">
					<div class="form">
						<h4 class="mb-4 text-center">contacta con nosotros</h4>
						<form action="#" method="post">
							<div class="form-group">
								<label class="my-2">Nombre</label>
								<input class="form-control" type="text" name="Name" placeholder="" required="">
							</div>
							<div class="form-group">
								<label>Correo Electrónico</label>
								<input class="form-control" type="email" name="Email" placeholder="" required="">
							</div>
							<div class="form-group">
								<label>Mensaje</label>
								<textarea id="textarea" placeholder=""></textarea>
							</div>
							<div class="input-group1">
								<input class="form-control" type="submit" value="Enviar">
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
								<p> Cuba

								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-envelope"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6 class="ad-info text-uppercase mb-2">Correo</h6>
								<p>Correo :
									<a href="mailto:example@email.com"> mail@example.com</a>
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
								<h6 class="ad-info text-uppercase mb-2">Teléfono</h6>
								<p>+1 234 567 8901</p>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection

@push('scripts')

@endpush

