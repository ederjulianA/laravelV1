		
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="{{ URL::route('home')}}">Home</a></li>


					@if(Auth::check())
						<li class="dropdown">
							
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuario <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="{{ URL::route('cuenta-sign-out')}}">Cerrar Sesion</a></li>
								<li><a href="{{ URL::route('cuenta-cambiar-pass')}}">Cambiar Contrasena</a></li>
								<li><a href="{{ URL::route('cuenta-nit')}}">registrar Nit</a></li>

							</ul>
						</li>
						

					@else
						<li><a href="{{ URL::route('cuenta-sign-in')}}"> Iniciar Sesion</a></li>
						<li><a href="{{ URL::route('crear-cuenta')}}">Crear Cuenta</a></li>
						<li><a href="{{ URL::route('cuenta-olvido-pass')}}">Olvido Su Contrasena</a></li>
					@endif
				</ul>
			</div>	
		</nav>
