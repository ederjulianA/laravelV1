
<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8"/>
<meta name="viewport" 
		  content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="google-translate-customization" content="1fa5ed600c542c7f-0ed75a183dbf79ae-g49b70c34f1fdff4e-1b"></meta>
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
	<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		<center>
			<a class="twitter-timeline" href="https://twitter.com/ederjulianA" data-widget-id="317728820402716674">Tweets by @ederjulianA</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


		</center>
	
	</aside>
	{{ HTML::script('assets/js/bootstrap.min.js')}}

		<footer class="pie-de-pagina">
			<p><strong>Eder Alvarez ®</strong></p>
		
		</footer>
</body>
</html>