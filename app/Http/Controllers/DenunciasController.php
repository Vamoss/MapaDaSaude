<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DenunciasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		/*
		//TODO
		return '{
			"data":[
				{
					"description":"Não havia nenhum médico disponível",
					"type":0,
					"date":"2012-04-23T18:25:43",
					"position":{"lat":-20.9259488, "lng":-41.8702564}
				},
				{
					"description":"Ambulância chegou depois de 1:00 esperando",
					"type":2,
					"date":"2012-04-23T18:25:43",
					"position":{"lat":-16.9259488, "lng":-41.8702564}
				},
				{
					"description":"O hospital estava sem o remédio que eu precisava",
					"type":4,
					"date":"2012-04-23T18:25:43",
					"position":{"lat":-23.9259488, "lng":-48.8702564}
				}
			]
		}';
		*/
		$denuncias = \App\Denuncia::latest('data')->get();
		return compact('denuncias');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
			'tipo' => 'required',
			'propriedade' => 'required',
			'lat' => 'required',
			'lng' => 'required',
			'data' => 'required|date_format:"d/m/Y"'
		]);


		$input = $request->all();

		//TODO
		//usando o usuário de teste, uma vez que não temos o login feito ainda
		$input["usuario"] = 1;

		//caso algum campo esteja vazio, e algum deles sejam foreign keys no banco, evita erros
		foreach ($input as &$value) {
			if (empty($value)) $value = null;
		}
		//var_dump($input);
		//return;
		$result = \App\Denuncia::create($input);
		return $result;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
