@extends('plantilla.main')

@section('content')
<section class="contenido">
			TU nit Actual   {{ $user->nit->nit_unico}}

	<div class="field">
		<h2>Registrar Nuevo Nit</h2>
		<form method="post" action="{{ URL::route('cuenta-nit-post')}}">
			<div class="field">
				<input type="text" name="nit">
				@if($errors->has('nit'))
				{{ $errors->first('nit') }}
			@endif
				
			</div>

			<input type="submit" value="Registrar">
			{{ Form::token()}}	
		</form>
		
	</div>
	
</section>

@stop