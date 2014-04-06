<?php

class Pusers extends Eloquent {

	protected $table = 'pusers';


	protected $hidden  = array('password');

	protected $fillable = array('username','password','email', 'code');

	public static $rules = array(
		'username'		=>		'required|min:2|max:25|',
		'email'		=>		'required|email|unique:pusers',
		'password'				=>	'required|alpha_num|between: 8,12|confirmed',
		'password_confirmation'	=>	'required|alpha_num|between:8,12',
		'tipo'					=>	'required|integer'

		);
}