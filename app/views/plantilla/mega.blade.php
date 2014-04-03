<!DOCTYPE html>
<html lang="es">
<head>
	<title>Megalopolis</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    {{ HTML::style('bootstrap/css/bootstrap.min.css', array('media' => 'screen'))}}
    
	
	<!-- Font Awesome -->
	{{ HTML::style('css/font-awesome.min.css', array('media' => 'screen'))}}
	
	
	<!-- Pace -->
	{{ HTML::style('css/pace.css', array('media' => 'screen'))}}
	
	
	<!-- Full Calendar -->
	{{ HTML::style('css/fullcalendar.css', array('media' => 'screen'))}}
		
	
	<!-- Endless -->
	{{ HTML::style('css/endless.min.css', array('media' => 'screen'))}}
	{{ HTML::style('css/endless-skin.css', array('media' => 'screen'))}}
	
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
									Promosiones
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
</div>





<!--  javascript
    ================================================== -->
    <!-- se cargan las respectivas libreria de JS al final de la pagina para optimizar el cargado del documento -->
	
	<!-- Jquery -->
	{{ HTML::script('js/jquery-1.10.2.min.js')}}
	
	
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
	

</body>
</html>