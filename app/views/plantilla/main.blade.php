
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
		<h1 id="titulo_header">FTM iLovato---laravelFramework</h1>
		<figure id="avatar">
			<img src="{{asset('img/ederjuliana.png') }}" />
			<figcaption></figcaption>
		</figure>
	
		
	</header>

	@include('plantilla.navegation')
	@if(Session::has('global'))
	<div class="alert alert-info">
		<p>{{ Session::get('global') }}</p>
	
	</div>
	
@endif
	
	@yield('content')
	{{ HTML::script('assets/js/bootstrap.min.js')}}
</body>
</html>