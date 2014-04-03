<?php


Route::get('/', array(
		'as' => 'home',
		'uses' => 'HomeController@home'
	));

Route::get('/megalopolis', array(
		'as' => 'megalopolis',
		'uses' => 'HomeController@getMega'
	));

Route::get('/mega-index', array(
		'as' => 'indexMega',
		'uses' => 'HomeController@indexMega'
	));

Route::get('/mega-login', array(
		'as' => 'login',
		'uses' => 'HomeController@login'
	));





Route::get('/user/{username}', array(
		'as' => 'profile-user',
		'uses' => 'PerfilController@user'
	));



Route::get('eder', array(
		'as' => 'eder',
		'uses' => 'CuentaController@eder'
	));


/*  Grupo autenticado*/

Route::group(array('before' => 'auth'), function(){

	/* GRUPO PROTEGIDO CSRF*/


	Route::group(array('before' => 'csrf'), function(){
		/* CAMBIAR CONTRASEÑA  (POST)*/
				Route::post('/cuenta/cambiar-pass', array(
						'as' 	=> 'cuenta-cambiar-pass-post',
						'uses' 	=> 'CuentaController@postCambiarPass'
					));

				Route::post('/cuenta/nit', array(
						'as' 	=> 'cuenta-nit-post',
						'uses' 	=> 'CuentaController@postNit'
					));

	});

		/* Log out  (GET)*/
		Route::get('/cuenta/sign-out', array(
				'as' => 'cuenta-sign-out',
				'uses' => 'CuentaController@getSignOut'
			));

		/* REGISTRAR NIT  (GET)*/
		Route::get('/cuenta/nit', array(
				'as' => 'cuenta-nit',
				'uses' => 'CuentaController@getNit'
			));


		/* CAMBIAR CONTRASEÑA  (GET)*/
		Route::get('/cuenta/cambiar-pass', array(
				'as' => 'cuenta-cambiar-pass',
				'uses' => 'CuentaController@getCambiarPass'
			));
});


/*
	Grupo no autenticadas

*/

Route::group(array('before' => 'guest'), function(){
	/*
		Grupo de proteccion CSRF
	*/
			Route::group(array('before' => 'csrf'), function(){

			});
	/*
	
		Crear cuenta (POST)

	*/	

	Route::post('crear/cuenta', array(
			'as' => 'crear-cuenta-post',
			'uses' => 'CuentaController@postCrear'
		));	


		/*
	
		SIGN IN (POST)

	*/	

	Route::post('cuenta/sign-in', array(
			'as' => 'cuenta-sign-in-post',
			'uses' => 'CuentaController@postSignIn'
		));

	/* OLVIDO CONTRASENA POST*/
	


	Route::post('/cuenta/olvido-pass', array(
			'as' => 'cuenta-olvido-pass-post',
			'uses' => 'CuentaController@postOlvidoPass'
		));

	/* OLVIDO CONTRASENA GET*/
	


	Route::get('/cuenta/olvido-pass', array(
			'as' => 'cuenta-olvido-pass',
			'uses' => 'CuentaController@getOlvidoPass'
		));

	Route::get('/cuenta/recuperar/{code}',array(
			'as' => 'cuenta-recuperar',
			'uses' => 'CuentaController@getRecuperar'
		));


	/* SIGN IN */


	Route::get('/cuenta/sign-in', array(
			'as' => 'cuenta-sign-in',
			'uses' => 'CuentaController@getSignIn'
		));


	/*
	
		Crear cuenta (GET)

	*/	

	Route::get('crear/cuenta', array(
			'as' => 'crear-cuenta',
			'uses' => 'CuentaController@getCrear'
		));	

	/*
		ACTIVAR CUENTA VIA EMAIL
	*/

	Route::get('/activar/cuenta/{code}', array(

			'as' => 'activar-cuenta',
			'uses' => 'CuentaController@getActivate'
		));


});