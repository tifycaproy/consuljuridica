<div class="row mb-4" id="load">
	@foreach ($noticias as $noticia)
		<div class="col-md-4 card p-0 p-sm-4">
		@if ($noticia->url_multimedia != NULL)
			<div class="mt-3">
				@php
					echo html_entity_decode($noticia->url_multimedia);
				@endphp
			</div>
		@elseif($noticia->url_imagen != NULL)
			<div class="mt-3 caja-foto"  style=" background-image: url('{{ asset('images/noticias') }}/{{ $noticia->url_imagen }}');" class="rounded">
			</div>
		@endif
			<div class="card-body">
				<ul class="blog-icons my-4">
					<li>
						<a href="#">
							<i class="far fa-calendar-alt"></i> {{ $noticia->created_at->format('d-m-Y') }}</a>
					</li>
				</ul>
				<h5 class="card-title ">
					<a href="{{route('detalle',$noticia->id)}}">{{ $noticia->titulo }}</a>
				</h5>
				@php
					echo html_entity_decode($noticia->resumen);
				@endphp
				<i style="color:silver; font-size: .8rem">{{$noticia->fuente}}</i>
				<div class="read inner mt-4">
					<a href="{{route('detalle',$noticia->id)}}" class="btn btn-sm animated-button victoria-two">Leer más</a>
				</div>
			</div>
		</div>
	@endforeach
</div>
{{ $noticias->links() }}