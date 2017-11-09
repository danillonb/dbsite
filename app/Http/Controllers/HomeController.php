<?php

namespace App\Http\Controllers;

use Request;
use App\Cliente;
use App\Contato;
use App\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count_contato = Contato::count();

        $count_contato_recebido = DB::table('contatos')
            ->where('status', '=', 'Recebido')
            ->count();

        $count_contato_respondido = DB::table('contatos')
            ->where('status', '=', 'Respondido')
            ->count();
        
        
        
        return view('home',[
            'count_contato' => $count_contato,
            'count_contato_recebido' => $count_contato_recebido,
            'count_contato_respondido' => $count_contato_respondido,
        ]);
    }
}
