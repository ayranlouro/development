<?php

namespace App\Http\Controllers;

use App\ClientesCategorias;
use Illuminate\Http\Request;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $search = ClientesCategorias::all();
        return view('home', ['search' => $search]);
    }

    public function show(Request $request)
    {   
        $output="";
        $search = DB::table('clientes_categorias')->where('categoria', 'LIKE', '%'.$request->search."%")->get();

        return view('home', ['search' => $search]);
    }
}
