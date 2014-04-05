@extends('plantilla.landing')

@section('content')
	<div id="landing-content">
		
		<div class="padding-md">
				<div class="row">
					<div class="col-md-3 col-sm-3">
						<div class="row">
							<div class="col-xs-6 col-sm-12 col-md-6 text-center">
								<a href="#">
									<img src="img/merca.jpg" alt="User Avatar" class="img-thumbnail">
								</a>
								<div class="seperator"></div>
								<div class="seperator"></div>
							</div><!-- /.col -->
							<div class="col-xs-6 col-sm-12 col-md-6">
								<strong class="font-14">Mercagan</strong>
								<small class="block text-muted">
									mercagan@email.com
								</small> 
								<div class="seperator"></div>
								<a class="btn btn-success btn-xs m-bottom-sm">Seguir</a>
								<div class="seperator"></div>
								<a href="#" class="social-connect tooltip-test facebook-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="social-connect tooltip-test twitter-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-connect tooltip-test google-plus-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
								<div class="seperator"></div>
								<div class="seperator"></div>
							</div><!-- /.col -->
						</div><!-- /.row -->
						<div class="panel m-top-md">
							<div class="panel-body">
								<div class="row">
									<div class="col-xs-4 text-center">
										<span class="block font-14">301</span>
										<small class="text-muted">Productos</small>
									</div><!-- /.col -->
									<div class="col-xs-4 text-center">
										<span class="block font-14">129</span>
										<small class="text-muted">Promosiones</small>
									</div><!-- /.col -->
									
								</div><!-- /.row -->
							</div>
						</div><!-- /panel -->

						
					<!--  SLIDER DE IMAGENES UTILIZANDO JAVASCRIPT Y BOOTSTRAP-->

							<div id="myCarousel" class="carousel slide">
								      <!-- Indicators -->
								      <ol class="carousel-indicators">
								        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								        <li data-target="#myCarousel" data-slide-to="1"></li>
								        <li data-target="#myCarousel" data-slide-to="2"></li>
								      </ol>
								      <div class="carousel-inner">
								        <div class="item active">
								          <img src="{{asset('img/merca2.jpg') }}" data-src="" alt="first slide"  width="100%" />
								          <div class="container">
								            <div class="carousel-caption">
								              <h1></h1>
								              <p></p>
								              
								            </div>
								          </div>
								        </div>
								        <div class="item">
								        	<img src="{{asset('img/ederjuliana2.png') }}" data-src="" alt="Second slide"  width="100%" />
								         
								          <div class="container">
								            <div class="carousel-caption">
								              <h1></h1>
								              <p></p>
								              <p></p>
								            </div>
								          </div>
								        </div>
								        <div class="item">
								          <img src="{{asset('img/xbox2.jpg') }}" data-src="" alt=""  width="100%"  />
								          <div class="container">
								            <div class="carousel-caption">
								              <h1></h1>
								              <p></p>
								              <p></p>
								            </div>
								          </div>
								        </div>
								      </div>
								      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
								      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
							</div><!-- /.carousel -->
					</div><!-- /.col -->

				<!--  FIN SECCION DATOS DE EMPRESA MAS PROMOS##################################################  -->	
					
					<div class="col-md-9 col-sm-9">
						<div class="productos-container">

								<div class="producto fadeInDown animation-delay2" >
										<div class="thumbnail">
											<img src="{{asset('img/prod1.jpg') }}">
											<div class="ribbon-wrapper">
												<div class="ribbon-inner shadow-pulse bg-danger">
													Agotado
												</div>
											</div>
											<div class="caption">
											<h4>Titulo Producto</h4>
											<p>Precio : $20000</p>
											<p> <a href="#simpleModal" role="button" data-toggle="modal" class="btn btn-info"><i class="fa fa-heart"></i> Favoritos</a></p>
								
											</div>
							
										</div>
									
								</div>

								<div class="producto fadeInUp animation-delay4">
										<div class="thumbnail">
											<img src="{{asset('img/prod2.jpg') }}">
											<div class="caption">
											<h4>Titulo Producto</h4>
											<p>Precio : $20000</p>
											<p> <a href="#simpleModal" role="button" data-toggle="modal" class="btn btn-info"><i class="fa fa-heart"></i> Favoritos</a></p>
								
											</div>
							
										</div>
									
								</div>

								<div class="producto fadeInDown animation-delay3">
										<div class="thumbnail">
											<img src="{{asset('img/prod3.jpg') }}">
											<div class="caption">
											<h4>Titulo Producto</h4>
											<p>Precio : $20000</p>
											<p> <a href="#simpleModal" role="button" data-toggle="modal" class="btn btn-info"><i class="fa fa-heart"></i> Favoritos</a></p>
								
											</div>
							
										</div>
									
								</div>





								<div class="producto fadeInDown animation-delay2" >
										<div class="thumbnail">
											<img src="{{asset('img/prod1.jpg') }}">
											<div class="ribbon-wrapper">
												<div class="ribbon-inner shadow-pulse bg-danger">
													Agotado
												</div>
											</div>
											<div class="caption">
											<h4>Titulo Producto</h4>
											<p>Precio : $20000</p>
											<p> <a href="#simpleModal" role="button" data-toggle="modal" class="btn btn-info"><i class="fa fa-heart"></i> Favoritos</a></p>
								
											</div>
							
										</div>
									
								</div>

								<div class="producto fadeInUp animation-delay4">
										<div class="thumbnail">
											<img src="{{asset('img/prod2.jpg') }}">
											<div class="caption">
											<h4>Titulo Producto</h4>
											<p>Precio : $20000</p>
											<p> <a href="#simpleModal" role="button" data-toggle="modal" class="btn btn-info"><i class="fa fa-heart"></i> Favoritos</a></p>
								
											</div>
							
										</div>
									
								</div>

								<div class="producto fadeInDown animation-delay3">
										<div class="thumbnail">
											<img src="{{asset('img/prod3.jpg') }}">
											<div class="caption">
											<h4>Titulo Producto</h4>
											<p>Precio : $20000</p>
											<p> <a href="#simpleModal" role="button" data-toggle="modal" class="btn btn-info"><i class="fa fa-heart"></i> Favoritos</a></p>
								
											</div>
							
										</div>
									
								</div>



								<div class="producto fadeInDown animation-delay2" >
										<div class="thumbnail">
											<img src="{{asset('img/prod1.jpg') }}">
											<div class="caption">
											<h4>Titulo Producto</h4>
											<p>Precio : $20000</p>
											<p> <a href="#simpleModal" role="button" data-toggle="modal" class="btn btn-info"><i class="fa fa-heart"></i> Favoritos</a></p>
								
											</div>
							
										</div>
									
								</div>

								<div class="producto fadeInUp animation-delay4">
										<div class="thumbnail">
											<img src="{{asset('img/prod2.jpg') }}">
											<div class="ribbon-wrapper">
												<div class="ribbon-inner shadow-pulse bg-danger">
													Agotado
												</div>
											</div>
											<div class="caption">
											<h4>Titulo Producto</h4>
											<p>Precio : $20000</p>
											<p> <a href="#simpleModal" role="button" data-toggle="modal" class="btn btn-info"><i class="fa fa-heart"></i> Favoritos</a></p>
								
											</div>
							
										</div>
									
								</div>

								<div class="producto fadeInDown animation-delay3">
										<div class="thumbnail">
											<img src="{{asset('img/prod3.jpg') }}">
											<div class="caption">
											<h4>Titulo Producto</h4>
											<p>Precio : $20000</p>
											<p> <a href="#simpleModal" role="button" data-toggle="modal" class="btn btn-info"><i class="fa fa-heart"></i> Favoritos</a></p>
								
											</div>
							
										</div>
									
								</div>



								<div class="producto fadeInDown animation-delay2" >
										<div class="thumbnail">
											<img src="{{asset('img/prod1.jpg') }}">
											<div class="caption">
											<h4>Titulo Producto</h4>
											<p>Precio : $20000</p>
											<p> <a href="#simpleModal" role="button" data-toggle="modal" class="btn btn-info"><i class="fa fa-heart"></i> Favoritos</a></p>
								
											</div>
							
										</div>
									
								</div>

								<div class="producto fadeInUp animation-delay4">
										<div class="thumbnail">
											<img src="{{asset('img/prod2.jpg') }}">
											<div class="ribbon-wrapper">
												<div class="ribbon-inner shadow-pulse bg-danger">
													Agotado
												</div>
											</div>
											<div class="caption">
											<h4>Titulo Producto</h4>
											<p>Precio : $20000</p>
											<p> <a href="#simpleModal" role="button" data-toggle="modal" class="btn btn-info"><i class="fa fa-heart"></i> Favoritos</a></p>
								
											</div>
							
										</div>
									
								</div>

								<div class="producto fadeInDown animation-delay3">
										<div class="thumbnail">
											<img src="{{asset('img/prod3.jpg') }}">
											<div class="caption">
											<h4>Titulo Producto</h4>
											<p>Precio : $20000</p>
											<p> <a href="#simpleModal" role="button" data-toggle="modal" class="btn btn-info"><i class="fa fa-heart"></i> Favoritos</a></p>
								
											</div>
							
										</div>
									
								</div>

								
							
						</div><!--  ############################################# FIN DEL CONTENEDOR DE PRODUCTOS################## -->


						
						



					</div>
				</div>
		</div>
	</div>

	<!--Modal-->
		<div class="modal fade" id="simpleModal">
  			<div class="modal-dialog">
    			<div class="modal-content">
      				<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4>Produto</h4>
      				</div>
				    <div class="modal-body">
				      <div class="search-container">
									<div class="panel panel-default">
										<div class="panel-body">	
											<div class="search-header">
												<a href="#" class="h4 inline-block">Producto 1</a>

												<strong>($20.000 COP)</strong>
											 
											</div>
											
											<div class="seperator"></div>
											
											<p class="m-top-sm">
												<a href="#" class="pull-left   m-right-sm"> 
													<img src="{{asset('img/prod2.jpg') }}" alt="Author" width="100px" height="100px"> 
												</a> Descripcion del producto seleccionado
												</p>
																					
											<div class="text-right">
												<a class="btn btn-info"><i class="fa fa-heart"></i> Favoritos</a>
											</div>
										</div>
									</div><!-- /panel -->
								</div><!-- /search-container -->
				    </div>
			  	</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
@stop