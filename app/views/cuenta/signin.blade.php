@extends('plantilla.main')

@section('content')

<section class="contenido">
			<form action="{{ URL::route('cuenta-sign-in-post') }}" method="post">
		

		<div class="field">
			<label for="email">Email:</label>  <input type="text" name="email" {{  (Input::old('email')) ? 'value="'. Input::old('email').'"' : ''    }} >
			@if($errors->has('email'))
				{{ $errors->first('email') }}
			@endif	
			
		</div>

		<div class="field">
			<label for="password">Password:</label>  <input type="password" name="password">
				@if($errors->has('password'))
				{{ $errors->first('password') }}
			@endif
			
		</div>

		<div class="field">
			<input type="checkbox" name="remember" id="remember">
			<label for="remember">
				Recordarme
			</label>
			
		</div>

		<input type="submit" value="Iniciar Sesion" class="LogInBtn">

		{{ Form::token()}}
	</form>
	

</section>


@stop