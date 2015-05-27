<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensajesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mensajes',function(Blueprint $table){
			
			$table->increments('id');
			$table->string('nombre');
			$table->string('email');
			$table->string('telefono');
			$table->text('mensaje');
			$table->string('leido');

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
		Schema::drop('mensajes');
	}

}
