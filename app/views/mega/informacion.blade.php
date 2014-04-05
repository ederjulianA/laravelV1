@extends('plantilla.landing')

@section('content')

<div id="main-container">
			<div class="padding-md">
				<div class="row">
					<div class="col-md-11">	
						<div class="row">	
							<div class="col-md-6">
								<h2>Información de Contacto</h2>
								<address>
								  <strong>Twitter, Inc.</strong><br>
									795 Folsom Ave, Suite 600<br>
									San Francisco, CA 94107<br>
									<div class="seperator"></div>
									<strong>Phone : <span class="theme-font">(123) 456-7890</span></strong><br>
									<strong>Email : <span class="theme-font">endless.themes@gmail.com</span></strong><br>
									<strong>Website : <span class="theme-font">Your website</span></strong>
								</address>
								<hr>
								<h2>Nombre Empresa</h2>
								<img src="{{asset('img/prod2.jpg') }}">
								<hr>
								<div class="col-md">
									<h4>We'd Love to Hear From You, Lets Get In Touch!</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula.
									</p>
								</div>
							</div><!-- /.col -->
							<div class="col-md-6">
									<div id="map_canvas" class="map"></div>
									<hr>
									<h2>Preguntas Frecuentes</h2>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
													Collapsible Group Item #1
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
											<div class="panel-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
											</div>
										</div>
									</div>

									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#C2">
													Collapsible Group Item #1
												</a>
											</h4>
										</div>
										<div id="C2" class="panel-collapse collapse" style="height: 0px;">
											<div class="panel-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
											</div>
										</div>
									</div>

									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#C3">
													Collapsible Group Item #1
												</a>
											</h4>
										</div>
										<div id="C3" class="panel-collapse collapse" style="height: 0px;">
											<div class="panel-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
											</div>
										</div>
									</div>
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.padding-md -->
		</div>
@stop

@section('scripts')

	<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>	
	{{ HTML::script('js/jquery-ui-map/ui/min/jquery.ui.map.full.min.js')}}
	{{ HTML::script('js/jquery-ui-map/ui/min/jquery.ui.map.microformat.min.js')}}
	<script>
		 $(function() { 
			var yourStartLatLng = new google.maps.LatLng(37.808661, -122.409819);
            $('#map_canvas').gmap({'center': yourStartLatLng});
		});
	</script>
@stop