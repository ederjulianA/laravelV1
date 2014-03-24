@extends('plantilla.main')


@section('content')
<section class="contenido">
		<form action="{{ URL::route('cuenta-cambiar-pass-post') }}" method="post">

		<div class="field">
			<label for="old_password">Pass Vieja :</label> <input type="password" name="old_password">

			@if($errors->has('old_password'))
				{{  $errors->first('old_password') }}
			@endif	
			
		</div>

		<div class="field">
			Nueva :<input type="password" name="password">

			@if($errors->has('password'))
				{{  $errors->first('password') }}
			@endif
			
		</div>
		<div class="field">
			Pass Otraves  :<input type="password" name="password_again">

			@if($errors->has('password_again'))
				{{  $errors->first('password_again') }}
			@endif
			
		</div>


		<input type="submit" value="cambiar">
		{{ Form::token() }}	
	</form>	

</section>

	
@stop