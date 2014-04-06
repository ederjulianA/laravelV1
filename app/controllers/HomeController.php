<?php

class HomeController extends BaseController {

	public function home(){
					/*Mail::send('emails.auth.test', array('name'=>'eder'), function($message)
						{
			   				 $message->to('ederalvarez2091057@gmail.com', 'Eder Alvarez')->subject('Welcome to laravel framework!');
						});*/

		return View::make('home');
	}

	public function postCrearUsuario(){
		$validator = Validator::make(Input::all(), Pusers::$rules);

		if($validator->passes()){
			$user = new Puser;
			$user->username = 	Input::get('username');
			$user->email = 	Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->tipo = Input::get('tipo');
			$user->active = 1;
			$user->password_temp = "";
			$user->code = "";
			if($user->save()){
				die("CREADO");

			}
			else{
				die("ERRORES");
			}

		
			

		}
			return Redirect::to('/')
			->with('message-alert', 'Hubieron algunos Problemas al crear el usuario')
			->withErrors($validator)
			->withInput();
		
	}

	public function getMega(){

		return View::make('mega.index');
	}

	public function indexMega(){
		return View::make('mega.inicio');
	}

	public function login(){
		return View::make('mega.login');
	}

	public function getCatalogo(){

		return View::make('mega.catalogo');
	}

	public function getInformacion(){
		return View::make('mega.informacion');
	}

	public function getFavs()
	{
		return View::make('mega.favoritos');
	}

	public function getSubs()
	{
		return View::make('mega.subscripciones');
	}
	 function getCatv2(){
	 	return View::make('mega.catalogov2'); 	
	 }

	 public function getEditarPerfil(){
	 	return View::make('mega.editarPerfil');
	 }
}	



