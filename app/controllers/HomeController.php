<?php

class HomeController extends BaseController {

	public function home(){
					/*Mail::send('emails.auth.test', array('name'=>'eder'), function($message)
						{
			   				 $message->to('ederalvarez2091057@gmail.com', 'Eder Alvarez')->subject('Welcome to laravel framework!');
						});*/

		return View::make('home');
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
}	



