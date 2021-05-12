<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models;
use DateTime;
use DateTimeZone;
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
		//Recebe a requisição
		$data = $request->all();

		//Define a zona de tempo para a de São Paulo...
		date_default_timezone_set('America/Sao_Paulo');
		
		//Armazena a data e hora atual
		$date = new DateTime();
		$date = $date->format('Y-m-d H:i:s');
		
		//Armazena o ip do usuário
		$ip_remetente = $_SERVER["REMOTE_ADDR"];

		//Array que armazena os dados a serem salvos
		$data = [
			'nome' => $data['nome'],
			'email' => $data['email'],
			'telefone' => $data['telefone'],
			'mensagem' => $data['mensagem'],
			'ip_remetente' => $ip_remetente,
			'dt_envio' => $date
		];

		//Verifica se foi inserido um anexo
		if($request->file('anexo') !== null){
			//Verifica se o anexo é válido
			if ($request->file('anexo')->isValid()) {
				//Salva o arquivo na pasta que armazena os files e altera o nome o arquivo na requisição para o seu caminho
				$data['anexo'] = $request->file('anexo')->store('files');
			}
		}

		//Verifica se foi informado o id do contato
		if (!empty($data['id'])) {

			$data['id']->array_push($request['id']);

			//Atualiza os dados de contato.
			Contact::update($data);

		} else {

			//Cria um novo contato.
			Contact::create($data);
		}

		//Retorna para a view de listagem
		return redirect('/');
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