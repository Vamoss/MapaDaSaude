<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;

class MunicipiosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$municipios = \App\Municipio::orderBy('nome')->get();
		return compact('municipios');
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
	 * Display the co_municipio
	 *
	 * @param  string  $city
	 * @param  string  $state
	 * @return Response
	 */
	public function query(Request $request, $state, $city)
	{
		//ordenando o co_municipio por ordem decrescente, evitamos retornar estados com o mesmo nome da cidade, como é o caso do Rio de Janeiro
		$id = \App\Municipio::select("co_municipio")->where('nome', $city)->where('uf', $state)->orderBy('co_municipio', 'desc')->first();
		if(is_null($id)){
			return "{}";
		}else{
			return $id;
		}
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
