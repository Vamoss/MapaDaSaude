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
			$table->integer('co_cnes')->index()->unsigned()->unique();
			$table->bigInteger('co_unidade')->index()->unsigned()->unique();
			$table->integer('co_municipio')->index()->unsigned();
			$table->integer('tp_estabelecimento')->index()->unsigned();
			$table->string('no_fantasia');
			$table->bigInteger('nu_cnpj')->unsigned();
			$table->bigInteger('nu_cpf')->unsigned();
			$table->date('cnes_dt_atualizacao');

			$table->string('origem_dado');
			$table->double('lat');
			$table->double('lng');
			$table->date('local_dt_atualizacao');

			$table->timestamps();
		});

		Schema::table('estabelecimentos', function($table)
		{
			$table->foreign('co_municipio')->references('co_municipio')->on('municipios');
			$table->foreign('tp_estabelecimento')->references('id')->on('tipos_estabelecimentos');
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
