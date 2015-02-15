<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Serie;

use Illuminate\Http\Request;
use App\Http\Requests\SerieRequest;
use Illuminate\Support\Facades\Response;

class SeriesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Serie::orderBy("title")->get();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param CreateSerieRequest $request
	 * @return Response
	 */
	public function store(SerieRequest $request)
	{
		return Serie::create($request->all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Serie::find($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return Serie::find($id);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param SerieRequest $request
	 * @return Response
	 */
	public function update(SerieRequest $request)
	{
		$serie = Serie::findOrFail($request->input("id"));

		$serie->fill($request->all());
		$serie->save();

		return $serie;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if(Serie::find($id)->delete()){
			return Response::json(["error" => false]);
		}
		else{
			return Response::json(["error" => true, "message" => "Não foi possível apagar o registro"]);
		}
	}

}
