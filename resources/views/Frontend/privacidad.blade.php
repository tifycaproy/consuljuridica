@extends ('Frontend.layouts.layouts')

@section('content')

	<section class="bottom-banner-w3layouts" >
		<div class="container">
			<!---728x90--->

			<h3 class="tittle-wthree text-left">
				Políticas de Privacidad</h3>
				<!---728x90--->

			<div class="row inner-sec-w3ls-agileinfo">
				<div class="mid-para text-left px-lg-3 px-2">
					@isset ($politica_privacidad) 
						@php
							echo html_entity_decode($politica_privacidad);
						@endphp  
					@endisset
				</div>
			</div>
		</div>
	</section>

@endsection

@push('scripts')

@endpush

