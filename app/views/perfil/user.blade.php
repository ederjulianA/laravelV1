@extends('plantilla.main')

@section('content')
		<p>Usuario : {{$user->username}}</p>
		<p>Email de contacto : {{$user->email}}</p>
		<p>Miembro desde : {{$user->created_at}}</p>
		<p>Nit del usuario  {{$user->nit->nit_unico}} </p>
@stop