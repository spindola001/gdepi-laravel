<?php

namespace App\Http\Controllers;
use App\Colabs;
use App\Epis;
use App\RelatorioEntrega;
// use Illuminate\Http\Request;

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
        $this->objColab=new Colabs();
        $this->objEpi=new Epis();
        $this->objRelatEnt=new RelatorioEntrega();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $relatEnt = $this->objRelatEnt->all()->sortBy('dataEntrega');

        return view('home', compact('relatEnt'));
    }
}
