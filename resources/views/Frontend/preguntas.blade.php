@extends ('Frontend.layouts.layouts')

@section('content')

<section class="bottom-banner-w3layouts">
		<div class="container">
			<!---728x90--->

			<h3 class="tittle-wthree text-center">Preguntas Frecuentes</h3>
			<!---728x90--->
		        <div class="row mt-5">

		        	@foreach ($preguntas as $pregunta)
		        		 <div class=" col-12 col-sm-2 col-md-4 mt-3 ">
				            <div class="col-12">
				              <h2>{{ $pregunta->pregunta }}</h2>
				              @php
								echo html_entity_decode($pregunta->respuesta);
							@endphp
				            </div>
				          </div>
		        	@endforeach

		          <div class="col-12 col-sm-9"></div>
		   </div>
		        </div>
		</div>

	</section>

@endsection

@push('scripts')

@endpush