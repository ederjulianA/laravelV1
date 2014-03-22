<?php

	class CuentaController extends BaseController {


		public function getNit(){
			$id = Auth::User()->id;
			$user = User::where('id','=',$id);
			if($user->count()){
				$user = $user->first();
				return View::make('cuenta.nit')
				->with('user' , $user);
			}
			
		}

		public function postNit(){

				$validator = Validator::make(Input::all(), 
				array(
						'nit' => 'required'

				)
			);
				if($validator->fails()){
				
				return Redirect::route('cuenta-nit')
						->withErrors($validator)
						->withInput();

			}else{
				$id = Auth::User()->id;

				$nit = Nit::where('id_user','=',$id);
				if($nit->count()){
					$nit = $nit->first();
					$nuevo_nit		=	Input::get('nit');
					$nit->nit_unico = $nuevo_nit;

							if($nit->save()){
									return Redirect::route('cuenta-nit')
								->with('global','TU nuevo NIT  se ha agregado :)');

							}
							else{
								die("ERROR");
							}
				}
			}	

		}



		public function getRecuperar($code){
				$user = User::where('code', '=', $code)
					->where('password_temp','!=','');

					if($user->count()){
						$user  = $user->first();


						$user->password 		= $user->password_temp;
						$user->password_temp	='';
						$user->code 			='';

						if($user->save()){
							return Redirect::route('home')
								->with('global','Tu contrasena ha sido actualizada correctamente ya puedes iniciar sesion :)');

						}
					}
					return Redirect::route('home')
								->with('global','Hubo un error al intentar recuperar tu cuenta');


		}











		public function getOlvidoPass(){
			return View::make('cuenta.olvido');
		}

		public function postOlvidoPass(){
			$validator = Validator::make(Input::all(), 
				array(
						'email' => 'required|email'

				)
			);

			if($validator->fails()){
				
				return Redirect::route('cuenta-olvido-pass')
						->withErrors($validator)
						->withInput();

			}else{
				//cambiamos la contrasena
				$user = User::where('email','=',Input::get('email'));

				if($user->count()){
					$user  		= 	$user->first();
					

					//generamos la nueva contrasena y el codigo
					$code 					= 	str_random(60);
					$password 				=	str_random(10);

					$user->code 			=	$code;
					$user->password_temp	=	Hash::make($password);

				    if($user->save()){
				    	Mail::send('emails.auth.recuperar', array('link' => URL::route('cuenta-recuperar', $code),'username' => $user->username, 'password' => $password), function($message) use($user){
				    		$message->to($user->email, $user->username)->subject("Tu nueva contrasena");
				    	});
				    	return Redirect::route('home')
				    		->with('global','Te hemos enviado un email con tu nueva Contrasena');
				    }else{
				    	die("no guardo");
				    }
				}else{
					die("no encontrado");
				}
			}

			return Redirect::route('cuenta-olvido-pass')
				->with('global', 'No se ha podido actualizar la nueva contrasena');
			
		}


		public function getCambiarPass(){
			return View::make('cuenta.password');
		}

		public function postCambiarPass(){
			$validator = Validator::make(Input::all(),
				 array(
				 	'old_password'			=>	'required',
				 	'password'				=>	'required|min:6',
				 	'password_again'		=>	'required|same:password'

				)

			);

			if($validator->fails()){
				//redirigimos

				return Redirect::route('cuenta-cambiar-pass')
						->withErrors($validator);
			}else{
				//cambiamos la contraseña
				$user 	=	User::find(Auth::user()->id);

				$old_password	=	Input::get('old_password');
				$password		=	Input::get('password');
				if(Hash::check($old_password, $user->getAuthPassword())){
					$user->password = Hash::make($password);

					if($user->save()){
						return Redirect::route('home')
							->with('global','Tu contrasena se ha actualizado');
					}
				}else{
					return Redirect::route('cuenta-cambiar-pass')
					->with('global',' Tu contrasena anterior no coinside ');
				}

			}

			return Redirect::route('cuenta-cambiar-pass')
					->with('global',' Tu contrasena no se puede cambiar');
		}



		public function getSignIn(){
			return View::make('cuenta.signin');

		}

		public function postSignIn(){

			$validator = Validator::make(Input::all(),array(

					'email' => 'required|email',
					'password' => 'required'
				)

			);

			if($validator->fails()){

				//redirigimos al usuario al log in
				return Redirect::route('cuenta-sign-in')
				->withErrors($validator)
				->withInput();
			}else{
				$remember = (Input::has('remember')) ? true : false;
				//creamos la sesion del usuario
				$auth = Auth::attempt(array(
						'email'  => Input::get('email'),
						'password' => Input::get('password'),
						'active' => 1
					), $remember);

				if($auth){

					return Redirect::intended('/');
				}else{
					return Redirect::route('cuenta-sign-in')
				->with('global', 'El email o la contraseña no coinsiden, o la cuenta no esta activada');
				}


			}

			return Redirect::route('cuenta-sign-in')
				->with('global', 'Hubo un problema en el inicio de sesion');

		}

		public function getSignOut(){

			Auth::logout();
			return Redirect::route('home');
		}




		public function getCrear(){
			return View::make('cuenta.crear');

		}

		public function eder()
		{
			return View::make('cuenta.eder');
		}

		public function postCrear(){

				$validator = Validator::make(Input::all(),

						array(
								'email' => 'required|max:50|email|unique:users',
								'username' => 'required|max:20|min:3|unique:users',
								'password' => 'required|min:6',
								'password_repite' => 'required|same:password'

							)

						);

			if($validator->fails()){
				return Redirect::route('crear-cuenta')
				->withErrors($validator)
				->withInput();
			}else
			{
				$email		=	Input::get('email');
				$username	=	Input::get('username');
				$password	=	Input::get('password');
				// CREAMOS EL CODIGO DE ACTIVACION

				$code		=	str_random(60);
				$user     = User::create(array(
						'email' => $email,
						'username' => $username,
						'password' => Hash::make($password),
						'code' => $code,
						'active' => 0

					));

				if($user){
						//enviar email

					Mail::send('emails.auth.activate', array('link' => URL::route('activar-cuenta',$code), 'username'=>$username), function($message) use ($user){
						$message->to($user->email, $user->username)->subject('Activa tu cuenta');
					});

					return Redirect::route('home')
						->with('global','Tu cuenta ha sido creada, te hemos enviado un email de activacion');
				}
			}


		}

		public function getActivate($code){
				$user = User::where('code', '=', $code)->where('active', '=',0);

				if($user->count()){
					$user = $user->first();
						//actualizamos el registro a activo

					$user->active = 1;
					$user->code   = '';

					if($user->save()){
						return Redirect::route('home')
					->with('global','Cuenta Activada. :)');

					}
				}
				return Redirect::route('home')
					->with('global','No hemos podido activar tu cuenta. :(');
		}

		
	}