<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePusersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pusers',function($table){
			$table->increments('id');

			$table->string('username');
			$table->string('password');
			$table->string('email')->unique();
			$table->string('password_temp');
			$table->text('code');
			$table->integer('tipo');

			$table->integer('active');

			$table->timestamps();



		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pusers');
	}

}
