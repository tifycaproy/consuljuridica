
@extends ('Frontend.layouts.layouts')
@section('body', 'height:100%;overflow-y: hidden')
@section('content')

<div class="col-12 position-fixed h-100 d-flex justify-content-center aling-items-center" style="background-color: white; z-index: 9999; top: 0px; opacity: .9 ">
	<div style="height: 50%;" class="mt-5 pt-5">
		<img src="{{ asset('images/load.gif') }}" class="mt-5" alt=""> <br>
		Conectando con el Banco ...
	</div>
	
</div>
<div class="h-100">
	
</div>


<form name="frm" action="https://sis.redsys.es/sis/realizarPago" method="POST" id="pasarela" >
<input type="hidden" name="Ds_SignatureVersion" value="{{$version}}"/></br>
<input type="hidden" name="Ds_MerchantParameters" value="{{ $params }}"/></br>
<input type="hidden" name="Ds_Signature" value="{{ $signature }}"/></br>
<input type="submit" value="Enviar" >
</form>

@endsection

@push('scripts')
	<script  type="text/javascript" charset="utf-8" async defer>
		$(document).ready(function(){
			$( "#pasarela" ).submit();
		});
		
	</script>
@endpush