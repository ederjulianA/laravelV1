			
		<nav class="">
			
				<ul class="">
					<li><a href="{{ URL::route('home')}}">Home</a></li>


					@if(Auth::check())
						
							
							
							
								<li><a href="{{ URL::route('cuenta-sign-out')}}">Cerrar Sesion</a></li>
								<li><a href="{{ URL::route('cuenta-cambiar-pass')}}">Cambiar Contrasena</a></li>
								<li><a href="{{ URL::route('cuenta-nit')}}">registrar Nit</a></li>

							
						
						

					@else
						<li><a href="{{ URL::route('cuenta-sign-in')}}"> Iniciar Sesion</a></li>
						<li><a href="{{ URL::route('crear-cuenta')}}">Crear Cuenta</a></li>
						<li><a href="{{ URL::route('cuenta-olvido-pass')}}">Olvido Su Contrasena</a></li>
					@endif
				</ul>

	
				
		</nav>
