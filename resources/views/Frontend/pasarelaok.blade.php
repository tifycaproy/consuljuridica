
@extends ('Frontend.layouts.layouts')
@section('body', 'height:100%;overflow-y: hidden')
@section('content')

<div class="col-12 position-fixed h-100 d-flex justify-content-center aling-items-center" style="background-color: white; z-index: 9999; top: 0px; opacity: .9 ">
	<div style="height: 50%;" class="mt-5 pt-5">
		<img src="{{ asset('images/check.gif') }}" class="" alt=""> <br>
		<div class="text-center">Trámite Precesado</div>
	</div>
	
</div>
<div class="h-100">
	
</div>

@endsection

@push('scripts')
	<script  type="text/javascript" charset="utf-8" async defer>
		var redirect = '{{ route('/') }}';
		var delay = 3000; 
		$(document).ready(function(){
			
				setTimeout(function(){ window.location = redirect; }, delay);
			//window.location.href = redirect;
		});
		
	</script>
@endpush