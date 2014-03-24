
<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8"/>
<meta name="viewport" 
		  content="width=device-width, initial-scale=1, maximum-scale=1" />
<head>
	<title>Sistema de autentificacion</title>
	{{ HTML::style('assets/css/normalize.css', array('media' => 'screen'))}}
	{{ HTML::style('assets/css/bootstrap-theme.min.css', array('media' => 'screen'))}}
	{{ HTML::style('assets/css/bootstrap.min.css', array('media' => 'screen'))}}
	{{ HTML::style('assets/css/estilos.css', array('media' => 'screen'))}}
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>
<body>




	<header>
			
		<figure id="logo">
			<img src="{{asset('img/ederjuliana.png') }}" />
		</figure>
		<h1 id="titulo_header">FTM iLovato</h1>
		<figure id="avatar">
			<img src="{{asset('img/ederjuliana.png') }}" />
			<figcaption></figcaption>
		</figure>
					@if(Session::has('global'))
	<div class="global-ms">
		<p>{{ Session::get('global') }}</p>
	
	</div>
	
	@endif
		
	</header>

	@include('plantilla.navegation')
	
	
	@yield('content')
	<aside class="contenido-lateral">
	
	</aside>
	{{ HTML::script('assets/js/bootstrap.min.js')}}

		<footer class="pie-de-pagina">
			<p><strong>Eder Alvarez ®</strong></p>
		
		</footer>
</body>
</html>