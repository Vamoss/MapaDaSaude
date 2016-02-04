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
		$estabelecimentos = \App\Estabelecimento::orderBy('nome')->get();
		return compact('estabelecimentos');
	}

	public function query()
	{
		$query = Input::get('estabelecimento');
		$searchValues = preg_split('/\s+/', $query); // split on 1+ whitespace

		//municipios
        $municipios   = \App\Municipio::where(function ($q) use ($searchValues) {
		  foreach ($searchValues as $value) {
		    $q->where('nome', 'like', "%{$value}%");
		  }
		})->limit(4)->get();
        
        //estabelecimentos
		$estabelecimentos = \App\Estabelecimento::where(function ($q) use ($searchValues) {
		  foreach ($searchValues as $value) {
		    $q->where('no_fantasia', 'like', "%{$value}%");
		  }
		})->join('municipios', 'municipios.co_municipio', '=', 'estabelecimentos.co_municipio')->limit(4)->get();

        return array_merge($estabelecimentos->toArray(), $municipios->toArray());
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
