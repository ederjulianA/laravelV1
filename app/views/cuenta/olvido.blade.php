@extends('plantilla.main')


@section('content')

	Recuperar contrasena

	<form action="{{ URL::route('cuenta-olvido-pass-post') }}" method="post">
		<div class="field">
			Email :<input type="text" name="email" {{ (Input::old('email')) ? 'value="'. e(Input::old('email')).'"' : '' }} >
				@if($errors->has('email'))
				{{ $errors->first('email') }}
			@endif
			
		</div>

		<input type="submit" value="Recuperar">
		{{ Form::token()}}
	</form>
@stop