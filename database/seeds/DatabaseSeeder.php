<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

		$this->call('PlanosTableSeeder');
		$this->call('TiposDenunciasTableSeeder');
	}
}

class PlanosTableSeeder extends Seeder {

    public function run()
    {
		DB::table('planos')->insert(['id' => 1, 'nome' => 'All Saúde']);
		DB::table('planos')->insert(['id' => 2, 'nome' => 'Amil']);
		DB::table('planos')->insert(['id' => 3, 'nome' => 'Assim']);
		DB::table('planos')->insert(['id' => 4, 'nome' => 'Bradesco']);
		DB::table('planos')->insert(['id' => 5, 'nome' => 'Cassi']);
		DB::table('planos')->insert(['id' => 6, 'nome' => 'Geap']);
		DB::table('planos')->insert(['id' => 7, 'nome' => 'Golden']);
		DB::table('planos')->insert(['id' => 8, 'nome' => 'GreenLine']);
		DB::table('planos')->insert(['id' => 9, 'nome' => 'Hapvida']);
		DB::table('planos')->insert(['id' => 10, 'nome' => 'Intermédica']);
		DB::table('planos')->insert(['id' => 11, 'nome' => 'Itálica']);
		DB::table('planos')->insert(['id' => 12, 'nome' => 'Marítima']);
		DB::table('planos')->insert(['id' => 13, 'nome' => 'Medicol']);
		DB::table('planos')->insert(['id' => 14, 'nome' => 'Memorial']);
		DB::table('planos')->insert(['id' => 15, 'nome' => 'NortreDame']);
		DB::table('planos')->insert(['id' => 16, 'nome' => 'Plena']);
		DB::table('planos')->insert(['id' => 17, 'nome' => 'Real']);
		DB::table('planos')->insert(['id' => 18, 'nome' => 'São Cristóvão']);
		DB::table('planos')->insert(['id' => 19, 'nome' => 'Santa Amália']);
		DB::table('planos')->insert(['id' => 20, 'nome' => 'Santa Casa']);
		DB::table('planos')->insert(['id' => 21, 'nome' => 'Santa Helena']);
		DB::table('planos')->insert(['id' => 22, 'nome' => 'SulAmérica']);
		DB::table('planos')->insert(['id' => 23, 'nome' => 'Unimed']);
		DB::table('planos')->insert(['id' => 24, 'nome' => 'Universal']);
		DB::table('planos')->insert(['id' => 25, 'nome' => 'Viva']);
	}
}

class TiposDenunciasTableSeeder extends Seeder {
    public function run()
    {
		DB::table('tipos_denuncias')->insert(['id' => 1, 'nome' => 'Sem médico', 'imagem' => '1.png']);
		DB::table('tipos_denuncias')->insert(['id' => 2, 'nome' => 'Demora no Atendimento', 'imagem' => '2.png']);
		DB::table('tipos_denuncias')->insert(['id' => 3, 'nome' => 'Demora na Ambulância', 'imagem' => '3.png']);
		DB::table('tipos_denuncias')->insert(['id' => 4, 'nome' => 'Hospital sem Estrutura', 'imagem' => '4.png']);
		DB::table('tipos_denuncias')->insert(['id' => 5, 'nome' => 'Falta de Medicação', 'imagem' => '5.png']);
		DB::table('tipos_denuncias')->insert(['id' => 6, 'nome' => 'Negligência', 'imagem' => '6.png']);
	}
}
