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
								<img src="images/banner1.jpg" class="card-img-top img-fluid rounded" alt="">
							</a>
							<div class="card-body">
								<ul class="blog-icons my-4">
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> Feb 20 .2018</a>
									</li>
									

								</ul>
								<h5 class="card-title ">
									<a href="single.html">Titulo de la Noticia</a>
								</h5>
								<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt,Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre dolor in elit sed uta labore dolore reprehender.. </p>
								
								<p>
								Where does it come from?

								Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

								The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
								Where can I get some?

								There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
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

