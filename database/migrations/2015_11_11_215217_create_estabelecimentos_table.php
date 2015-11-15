<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstabelecimentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estabelecimentos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome');
			$table->integer('municipio');
			$table->float('lat');
			$table->float('lng');
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
		Schema::drop('estabelecimentos');
	}

}
