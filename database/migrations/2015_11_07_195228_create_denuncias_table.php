<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDenunciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('denuncias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('usuario');
			$table->integer('tipo');
			$table->integer('posto');
			$table->integer('municipio');
			$table->string('titulo');
			$table->text('descricao');
			$table->string('provedor');
			$table->string('unidade');
			$table->timestamp('data');
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
		Schema::drop('denuncias');
	}

}
