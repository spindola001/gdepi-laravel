<?php

namespace App\Http\Controllers;

use App\Http\Requests\colabRequest;
use App\Colabs;
// use Illuminate\Http\Request;

class ColabController extends Controller
{

    private $objColab;

    public function __construct()
    {
        $this->middleware('auth');
        $this->objColab=new Colabs();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colabs = $this->objColab->all()->sortBy('nome');
        return view('show.showColabs', compact('colabs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.createColab');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(colabRequest $request)
    {
        $colabCad=$this->objColab->create([
            'nome'=>$request->colabName,
            'funcao'=>$request->funcao,
            'setor'=>$request->setor,
            'adm_at'=>$request->adm_at
        ]);
        if($colabCad){
            return redirect('colabCad');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ModelColab  $modelColab
     * @return \Illuminate\Http\Response
     */
    public function show(Colabs $Colabs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ModelColab  $modelColab
     * @return \Illuminate\Http\Response
     */
    public function edit(Colabs $Colabs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ModelColab  $modelColab
     * @return \Illuminate\Http\Response
     */
    public function update(colabRequest $request, Colabs $Colabs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ModelColab  $modelColab
     * @return \Illuminate\Http\Response
     */
    public function destroy(Colabs $Colabs)
    {
        //
    }
}
