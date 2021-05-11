<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models;
use Redirect,Response;
use Illuminate\Support\Facades\DB;
use stdClass;

class ContactController extends Controller
{

	/**
	* Retorna a lista de contatos.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index()
	{
		//Retorna todos os contatos
		$results = DB::select('select * from contact');

		//Converte os resultados para JSON e armazena na array $data
		$data['contacts'] = json_decode(json_encode($results), true);

		return view('list', $data);
	}

	/**
	* Abre o view para criar contato.
	*
	* @return \Illuminate\Http\Response
	*/
	public function create()
	{

	}

	/**
	* Cria ou atualiza o contato.
	*
	* @param \Illuminate\Http\Request $request
	* @return \Illuminate\Http\Response
	*/
	public function store(Request $request)
	{

	}

	/**
	* Exibe os dados do contato.
	*
	* @param int $id
	* @return \Illuminate\Http\Response
	*/
	public function show()
	{

	}

	/**
	* Abre uma view para edição do contato.
	*
	* @param int $id
	* @return \Illuminate\Http\Response
	*/
	public function edit($id)
	{
		
	}

	/**
	* Update the specified resource in storage.
	*
	* @param \Illuminate\Http\Request $request
	* @param int $id
	* @return \Illuminate\Http\Response
	*/

	public function update(Request $request)
	{

	}

	/**
	* Deleta o contato.
	*
	* @param int $id
	* @return \Illuminate\Http\Response
	*/

	public function destroy($id)
	{
		
	}
}