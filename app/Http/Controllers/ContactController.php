<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models;
use Redirect,Response;
class ContactController extends Controller
{

	/**
	* Retorna a lista de contatos.
	*
	* @return \Illuminate\Http\Response
	*/
	public function index()
	{
		
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
	public function show(Contact $contact)
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