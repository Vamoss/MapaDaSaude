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
			$table->bigIncrements('id')->unsigned();
			$table->integer('usuario')->index()->unsigned();
			$table->integer('tipo')->index()->unsigned();
			$table->integer('co_cnes')->index()->unsigned()->nullable();
			$table->integer('co_municipio')->index()->unsigned()->nullable();
			$table->string('provedor')->index()->nullable();//sus, plano
			$table->string('propriedade')->index()->nullable();//publico, privado
			$table->integer('plano')->index()->unsigned()->nullable();
			$table->timestamp('data')->index();
			$table->text('descricao');
			$table->timestamps();
		});

		Schema::table('denuncias', function($table)
		{
			$table->foreign('usuario')->references('id')->on('users');
			$table->foreign('tipo')->references('id')->on('tipos_denuncias');
			$table->foreign('co_cnes')->references('co_cnes')->on('estabelecimentos');
			$table->foreign('co_municipio')->references('co_municipio')->on('municipios');
			$table->foreign('plano')->references('id')->on('planos');
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
