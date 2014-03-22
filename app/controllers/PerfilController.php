<?php

class PerfilController extends BaseController{

		public function user($username){

			$user  = User::where('username', '=', $username);

				if($user->count()){
					$user = $user->first();
					return View::make('perfil.user')
						->with('user', $user);

				}

				return App::abort(404);

			
		}

}