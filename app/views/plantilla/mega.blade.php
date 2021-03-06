<!DOCTYPE html>
<html lang="es">
<head>
	<title>Megalopolis</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    {{ HTML::style('bootstrap/css/bootstrap.min.css', array('media' => 'screen'))}}

     <!-- My styles -->
    {{ HTML::style('css/mios.css', array('media' => 'screen'))}}
    
	
	<!-- Font Awesome -->
	{{ HTML::style('css/font-awesome.min.css', array('media' => 'screen'))}}
	
	
	<!-- Pace -->
	{{ HTML::style('css/pace.css', array('media' => 'screen'))}}
	
	
	<!-- Full Calendar -->
	{{ HTML::style('css/fullcalendar.css', array('media' => 'screen'))}}
		
	
	<!-- Endless -->
	{{ HTML::style('css/endless.min.css', array('media' => 'screen'))}}
	{{ HTML::style('css/endless-skin.css', array('media' => 'screen'))}}
	{{ HTML::style('css/endless-landing.min.css', array('media' => 'screen'))}}

	
</head>
<body class="overflow-hidden">


	<div id="overlay" class="transparent"></div>



<div id="wrapper" class="preload">
	
			<div id="top-nav" class="fixed skin-2">
					<a href="{{ URL::route('megalopolis')}}" class="brand">
						<span>Megalopolis</span>
						<span class="text-toggle"> colombia</span>
					</a><!-- /brand -->					
					<button type="button" class="navbar-toggle pull-left" id="sidebarToggle">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<ul class="nav-notification clearfix">
					
						
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="fa fa-bell fa-lg"></i>
								<span class="notification-label bounceIn animation-delay6">7</span>
							</a>
							<ul class="dropdown-menu notification dropdown-3">
								<li><a href="#">Tienes 5 notificaciones</a></li>					  
								<li>
									<a href="#">
										<span class="notification-icon bg-warning">
											<i class="fa fa-warning"></i>
										</span>
										<span class="m-left-xs">Mensaje de notificacion.</span>
										<span class="time text-muted">ahora</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="notification-icon bg-success">
											<i class="fa fa-plus"></i>
										</span>
										<span class="m-left-xs">Mensaje de notificacion</span>
										<span class="time text-muted">hace 2m</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="notification-icon bg-danger">
											<i class="fa fa-bolt"></i>
										</span>
										<span class="m-left-xs">Mensaje de notificacion</span>
										<span class="time text-muted">hace 5 min</span>
									</a>
								</li>
							
								<li><a href="#">Ver todas las notificaciones</a></li>					  
							</ul>
						</li>
						<li class="profile dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
								<strong>Mercagan</strong>
								<span><i class="fa fa-chevron-down"></i></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a class="clearfix" href="#">
										<img src="img/merca.jpg" alt="User Avatar">
										<div class="detail">
											<strong>Mercagan</strong>
											<p class="grey">mercagan@email.com</p> 
										</div>
									</a>
								</li>
								<li><a tabindex="-1" href="#" class="main-link"><i class="fa fa-edit fa-lg"></i> Editar Perfil</a></li>
								<li><a tabindex="-1" href="{{ URL::route('mega-favs')}}" class="main-link"><i class="fa fa-heart fa-lg"></i> Mis Favoritos</a></li>
								<li><a tabindex="-1" href="{{ URL::route('mega-subs')}}" class="main-link"><i class="fa fa-check fa-lg"></i> Mis Suscripciones</a></li>
								

								
								<li class="divider"></li>
								<li><a tabindex="-1" class="main-link logoutConfirm_open" href="#logoutConfirm"><i class="fa fa-lock fa-lg"></i>Cerrar Sesion</a></li>
							</ul>
						</li>
					</ul>
			</div><!-- FIN BARRA DE NAVEGACION FIJADA AL TOP -->

			<!-- ############################################################################################################## NAVEGACION FIJA TOP######################################-->


		<aside class="fixed skin-3">
			<div class="sidebar-inner scrollable-sidebar">
				<div class="size-toggle">
					<a class="btn btn-sm" id="sizeToggle">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="btn btn-sm pull-right logoutConfirm_open"  href="#logoutConfirm">
						<i class="fa fa-power-off"></i>
					</a>
				</div><!-- /size-toggle -->	
				<div class="user-block clearfix">
					<img src="img/merca.jpg" alt="User Avatar">
					<div class="detail">
						<strong>Mercagan</strong><span class="badge badge-danger m-left-xs bounceIn animation-delay4"></span>
						<ul class="list-inline">
							<li><a href="#">Perfil</a></li>
							
						</ul>
					</div>
				</div><!-- /user-block -->
				
				<div class="main-menu">
					<ul>
						<li class="active">
							<a href="#">
								<span class="menu-icon">
									<i class="fa fa-briefcase fa-lg"></i> 
								</span>
								<span class="text">
									Productos
								</span>
								<span class="menu-hover"></span>
							</a>
						</li>
						<li class="openable">
							<a href="#">
								<span class="menu-icon">
									<i class="fa fa-gift fa-lg"></i> 
								</span>
								<span class="text">
									Promociones
								</span>
								<span class="menu-hover"></span>
							</a>
							<ul class="submenu">
								<li><a href="#"><span class="submenu-label">Otro item</span></a></li>
								<li><a href="#"><span class="submenu-label">Otro item</span></a></li>
								
							</ul>
						</li>
					
						
						<li>
							<a href="#">
								<span class="menu-icon">
									<i class="fa fa-clock-o fa-lg"></i> 
								</span>
								<span class="text">
									ITEM MENU
								</span>
								<span class="menu-hover"></span>
							</a>
						</li>
					
				
					</ul>
					
					<div class="alert alert-info">
					Bienvenido al administrador de  Megalopolis
					</div>
				</div><!-- /main-menu -->
			</div><!-- /sidebar-inner -->
		</aside><!-- fin menu lateral izquierdo -->

		<!-- ############################################################################################################## MENU ALINEADO A LA IZQUIERDA######################################-->

		@yield('content')





		<!--  FOOTER###############################3-->

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-3 padding-md">
						
					</div>
					<div class="col-sm-3 padding-md">
						<p class="font-lg">Sobre Megalopolis</p>
						<p><small>Descripcion Breve de la Compañia (Megalopolis)</small></p>
					</div><!-- /.col -->
					
					<div class="col-sm-3 padding-md">
						<p class="font-lg">Mantente Informado</p>
						<a href="#" class="social-connect tooltip-test facebook-hover pull-left m-right-xs m-bottom-xs" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
						<a href="#" class="social-connect tooltip-test twitter-hover pull-left m-right-xs m-bottom-xs" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="social-connect tooltip-test google-plus-hover pull-left m-right-xs m-bottom-xs" data-toggle="tooltip" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
						<a href="#" class="social-connect tooltip-test rss-hover pull-left m-right-xs m-bottom-xs" data-toggle="tooltip" data-original-title="Rss feed"><i class="fa fa-rss"></i></a>
						<a href="#" class="social-connect tooltip-test tumblr-hover pull-left m-right-xs m-bottom-xs" data-toggle="tooltip" data-original-title="Tumblr"><i class="fa fa-tumblr"></i></a>
						<a href="#" class="social-connect tooltip-test dribbble-hover pull-left m-right-xs m-bottom-xs" data-toggle="tooltip" data-original-title="Dribbble"><i class="fa fa-dribbble"></i></a>
						<a href="#" class="social-connect tooltip-test linkedin-hover pull-left m-right-xs m-bottom-xs" data-toggle="tooltip" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a>
						<a href="#" class="social-connect tooltip-test pinterest-hover pull-left m-right-xs m-bottom-xs" data-toggle="tooltip" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a>
					</div><!-- /.col -->
					<div class="col-sm-3 padding-md">
						<p class="font-lg">Contactanos</p>
						Email : soporte@megalopolis.com
						<div class="seperator"></div>
						<a class="btn btn-info"><i class="fa fa-envelope"></i> Soporte</a>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>
		</footer>


</div>







<!--  javascript
    ================================================== -->
    <!-- se cargan las respectivas libreria de JS al final de la pagina para optimizar el cargado del documento -->
	
	<!-- Jquery -->
	{{ HTML::script('js/jquery-1.10.2.min.js')}}

	<!-- chosen -->
	{{ HTML::script('js/chosen.jquery.min.js')}}

	<!-- chosen -->
	{{ HTML::script('js/chosen.jquery.min.js')}}


	<!-- datepicker -->
	{{ HTML::script('js/bootstrap-datepicker.min.js')}}


	<!-- timepicker -->
	{{ HTML::script('js/bootstrap-timepicker.min.js')}}

	<!-- tagsinput -->
	{{ HTML::script('js/jquery.tagsinput.min.js')}}

	<!-- tagsinput -->
	{{ HTML::script('js/jquery.maskedinput.min.js')}}


	

	<!-- CARRUSEL -->
	{{ HTML::script('js/carousel.js')}}
	
	
	<!-- Jquery UI -->
	{{ HTML::script('js/jquery-ui.min.js')}}
	
	
	<!-- Bootstrap -->
	{{ HTML::script('bootstrap/js/bootstrap.min.js')}}
    
    
	<!-- Full Calender -->
	{{ HTML::script('js/fullcalendar.min.js')}}
	
	
	<!-- Modernizr -->
	{{ HTML::script('js/modernizr.min.js')}}
	
	
	<!-- Pace -->
	{{ HTML::script('js/pace.min.js')}}
	
	
	<!-- Popup Overlay -->
	{{ HTML::script('js/jquery.popupoverlay.min.js')}}

	
	<!-- Slimscroll -->
	{{ HTML::script('js/jquery.slimscroll.min.js')}}
	
	
	<!-- Cookie -->
	{{ HTML::script('js/jquery.cookie.min.js')}}
	

	<!-- Endless -->
	{{ HTML::script('js/endless/endless.js')}}

	<!-- waypoinst -->
	{{ HTML::script('js/waypoints.min.js')}}

	<!-- Endless -->
	{{ HTML::script('js/endless/endless.js')}}

	<!-- wyshtml5 -->
	{{ HTML::script('js/wysihtml5-0.3.0.min.js')}}
	
	@yield('scripts')

</body>
</html>