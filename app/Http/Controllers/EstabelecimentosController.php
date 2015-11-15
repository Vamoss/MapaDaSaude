<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use Response;

class EstabelecimentosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
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
		$estabelecimentos = \App\Estabelecimento::orderBy('nome')->get();
		return compact('estabelecimentos');
	}

	public function query()
	{
		$query = Input::get('estabelecimento');
        //TODO
		return '[
			{
				"co_unidade":1,
				"estabelecimento":"' . $query . ' something",
				"type":0,
				"date":"2012-04-23T18:25:43",
				"position":{"lat":-20.9259488, "lng":-41.8702564}
			},
			{
				"co_unidade":2,
				"estabelecimento":"' . $query . ' Não havia nenhum médico disponível",
				"type":0,
				"date":"2012-04-23T18:25:43",
				"position":{"lat":-20.9259488, "lng":-41.8702564}
			},
			{
				"co_unidade":3,
				"estabelecimento":"' . $query . ' O hospital estava sem o remédio que eu precisava",
				"type":4,
				"date":"2012-04-23T18:25:43",
				"position":{"lat":-23.9259488, "lng":-48.8702564}
			},
			{
				"co_unidade":4,
				"estabelecimento":"Ambulância chegou depois de 1:00 esperando",
				"type":2,
				"date":"2012-04-23T18:25:43",
				"position":{"lat":-16.9259488, "lng":-41.8702564}
			}
		]';
		$res   = \App\Estabelecimento::where('nome', 'LIKE', "%$query%")->get();
        return Response::json($res);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
