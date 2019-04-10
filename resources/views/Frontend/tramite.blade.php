@extends ('Frontend.layouts.layouts')

@section('content')

	<section class="bottom-banner-w3layouts" >
		<div class="container">

			<h3 class="tittle-wthree text-center">
				{{$servicio->titulo_servicio}}
			</h3>

			<div class="row inner-sec-w3ls-agileinfo">
				<div class="mid-para text-left px-lg-3 px-2">
					@php
						echo html_entity_decode($servicio->descripcion_servicio);
					@endphp
					
				</div>
				<div class="ban-form text-left" id="form-tramite">
					<h3 class="text-center">Tramítalo ahora</h3>
					<form action="{{ route('registro_tramite') }}" id="form-tramite" class="mt-4 row" method="post">
						 {{ csrf_field() }}
@foreach ($formatos as $formato)
	@if ($formato->servicio_id == $servicio->id )
		@foreach ($secciones as $seccion)	
			@if ($formato->seccion_id == $seccion->id)
			<h5 class="col-12 mb-4 mt-4">{{ $seccion->nombre_seccion }}</h5>
				@foreach ($seccionesCampos as $element)
					@if ($element->seccion_id == $seccion->id)
						@foreach ($campos as $item)
							@if ($item->id == $element->campo_id)
							@foreach ($tiposcampos as $tipo)
								@if ($item->tipo_campo_id == $tipo->id)
									@php
										$tipoc=$tipo->name;
									@endphp
								@endif
							@endforeach

								@if ($tipoc == 'text' || $tipoc == 'date' || $tipoc == 'email' || $tipoc == 'number')
									<div class="form-group col-6">
										<label style="font-size: .7rem;color: silver">{{ $item->nombre_campo }}</label>

										<input  class="form-control" 
												type="{{$tipoc}}" 
												name="{{ $seccion->id }}[{{ $item->id }}]" 
												placeholder="{{ $item->nombre_campo }}"
												required="" 
												@if ($tipoc == 'text')
												filter="texto" 
												data-invalid="No ingrese caracteres especiales"
												@elseif($tipoc == 'date')
												@elseif($tipoc == 'email')
												filter="email" 
												data-invalid="example@mail.com"
												@elseif($tipoc == 'number')
												filter="number" 
												data-invalid="Ingrese solo números"
												@endif 
										>
									</div>
								@elseif($tipoc == 'checkbox')
								<div class="form-check col-3 mb-4 @if ( $item->id == 22) d-none @endif">
								    <input  type="checkbox" 
								    		class="form-check-input " 
								    		name="{{ $seccion->id }}[{{ $item->id }}]" 
								    		id="{{ $seccion->id }}{{ $item->id }}"
								    		value="1"
								    		 @if ( $item->id == 22) required checked="" @endif
								    >
								    <label class="form-check-label" for="{{ $item->nombre_campo }}">{{ $item->nombre_campo }}</label>
								  </div>
								@elseif($tipoc == 'textarea')
									<div class="form-group col-12 mb-4">
									<label style="font-size: .7rem;color: silver">{{ $item->nombre_campo }}</label>
								    <textarea   name="{{ $seccion->id }}[{{ $item->id }}]" 
								    			class="form-control" 
								    			filter="texto" 
												data-invalid="No ingrese caracteres especiales"
												required="" 
								    ></textarea>
								  </div>
								@endif
							@endif
						@endforeach
					@endif
				@endforeach
			@endif
		@endforeach
	@endif
@endforeach

						<input type="hidden" name="id_servicio" value="{{$servicio->id}}">
						<input name="_token" value="{{ csrf_token() }}" type="hidden" onclick=""></input>
						<input class="form-control text-uppercase mt-5" type="submit" value="tramitar">
					</form>
				</div>
			</div>
	</section>

@endsection

@push('scripts')
<script type="text/javascript" charset="utf-8" >
	jQuery(document).ready(function(){
       $('#form-tramite').valida();
    });


  // $('.check').change(function(){
  //   var check = $(this).val();
  //     if ($(this).is(':checked')) {
  //     	$('.check').prop('disabled',true);
  //     	var id = $(this).attr('id');

  //     	$('#'+id).prop('disabled',false);
      	      
  //     }else{
  //        $('.check').prop('disabled',false);
  //     }
  // });

</script>
@endpush

