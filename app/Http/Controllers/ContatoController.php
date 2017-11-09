<?php

namespace App\Http\Controllers;

use Request;
use App\Cliente;
use App\Contato;
use App\User;
use Illuminate\Support\Facades\DB;

class ContatoController extends Controller
{
    public function novo ()  // Cliente solicita um orçamento e ele é salvo na base de dados
    {
    	$variaveis = Request::all();

    	//verificar se o e-mail já esxiste no banco de dados, caso exista ele ignora, caso não exista ele cria um novo cliente
    	$verificador = Cliente::firstOrCreate( 
    		['email' => $variaveis['email']], 
    		['nome' => $variaveis['nome'], 'telefone' => $variaveis['telefone']]
    	);
    	
    	//recebe do banco de dados as informações daquele cliente
    	$cliente = DB::table('clientes')
    		->where('email', '=', $variaveis['email'])
    		->get();

    	Contato::create([
    		'cliente_id' => $cliente[0]->id,
    		'mensagem' => $variaveis['mensagem']
    	]);
    	
    	
    	

    	return redirect()->route('welcome');
    }

    public function contato_total()
    {

        $cliente = Cliente::all();
        $contato = Contato::all();

        return view('contatos.total');
    }
}
