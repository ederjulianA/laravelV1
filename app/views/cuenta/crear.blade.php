@extends('plantilla.main')

@section('content')
<section class="contenido">
		<form action="{{ URL::route('crear-cuenta-post')}}" method="post">

		<div class="field">
			Email : <input type="text" name="email" {{ (Input::old('email')) ? 'value="'. e(Input::old('email')).'"' : '' }}>
			@if($errors->has('email'))
				{{ $errors->first('email') }}
			@endif	
			
		</div>

		<div class="field">
			Usuario : <input type="text" name="username" {{ (Input::old('username')) ? 'value="'. e(Input::old('username')).'"' : '' }} >
			@if($errors->has('username'))
				{{ $errors->first('username') }}
			@endif
			
		</div>

		<div class="field">
			Contrasena : <input type="password" name="password">
			@if($errors->has('password'))
				{{ $errors->first('password') }}
			@endif
			
		</div>


		<div class="field">
			Repetir Contrasena : <input type="password" name="password_repite">
			@if($errors->has('password_repite'))
				{{ $errors->first('password_repite') }}
			@endif
			
		</div>
		<input type="submit" value="crear cuenta">

		{{ Form::token()}}
		
	</form>
	

</section>



	

@stop
