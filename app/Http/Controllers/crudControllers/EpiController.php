<?php

namespace App\Http\Controllers;

use App\Http\Requests\epiRequest;
use App\Epis;
// use Illuminate\Http\Request;

class EpiController extends Controller
{
    private $objEpi;

    public function __construct()
    {
        $this->middleware('auth');
        $this->objEpi=new Epis();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $epis = $this->objEpi->all()->sortBy('descricao');
        return view('show.showEpis', compact('epis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.createEpi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(epiRequest $request)
    {
        $epiCad=$this->objEpi->create([
            'descricao'=>$request->descricao,
            'certAp'=>$request->certAp
        ]);
        if ($epiCad) {
            return redirect('epiCad');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ModelEpi  $modelEpi
     * @return \Illuminate\Http\Response
     */
    public function show(Epis $Epis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ModelEpi  $modelEpi
     * @return \Illuminate\Http\Response
     */
    public function edit(Epis $Epis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ModelEpi  $modelEpi
     * @return \Illuminate\Http\Response
     */
    public function update(epiRequest $request, Epis $Epis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ModelEpi  $modelEpi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Epis $Epis)
    {
        //
    }
}
