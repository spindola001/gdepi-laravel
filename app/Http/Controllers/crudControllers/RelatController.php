<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Colabs;
use App\Epis;
use App\RelatorioEntrega;
// use DateTime;
// use Illuminate\Support\Facades\DB;

class RelatController extends Controller
{

    private $objColab;
    private $objEpi;
    private $objRelatEnt;

    public function __construct()
    {
        $this->middleware('auth');
        $this->objColab=new Colabs();
        $this->objEpi=new Epis();
        $this->objRelatEnt=new RelatorioEntrega();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $date = date("Y-m-d");
        $relatEnt = $this->objRelatEnt->all()->sortBy('dataEntrega');
        // $relatEntDay = DB::table('relatorio_entrega_tbl')->where('dataEntrega','=', $date)->get();

        // dd($relatEntDay->DB::select('select * from users where active = ?', [1]));
        // $relatEntDay = $this->objRelatEnt->all();
        // DB::table('relatorio_entrega_tbl')->where('dataEntrega','=', $date);

        // $debug = $this->where(function($query) use($relatEnt, $date){
        //     if (isset($relatEnt['dataEntrega'])) {
        //         $query->where('dataEntrega', '=', $date);
        //     }
        // })->toSql();dd($debug);

        return view('home',compact('relatEnt'));

        //dd($relatEntDay);

        // dd($date);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colabs=$this->objColab->all()->sortBy('nome');
        $epis=$this->objEpi->all()->sortBy('descricao');
        return view('create.createRelat', compact(
            'colabs',
            'epis'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $relatEnt=$this->objRelatEnt->relColab();
        $cad=$this->objRelatEnt->create([
            'dataEntrega'=>$request->dataEntrega,
            'qtdEpi'=>$request->qtdEpi,
            'colab_id'=>$request->colab_id,
            'epi_id'=>$request->epi_id,
        ]);
        if ($cad) {
            return redirect('relatorioEpis');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info = $this->objRelatEnt->find($id);
        return view('show.show', compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = $this->objRelatEnt->find($id);
        $colabs = $this->objColab->all();
        $epis = $this->objEpi->all();
        return view('create.createRelat', compact(
            'info',
            'colabs',
            'epis'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->objRelatEnt->where(['id'=>$id])->update([
            'dataEntrega'=>$request->dataEntrega,
            'qtdEpi'=>$request->qtdEpi,
            'colab_id'=>$request->colab_id,
            'epi_id'=>$request->epi_id,
        ]);
        return redirect('relatorioEpis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->objRelatEnt->destroy($id);
        return ($del) ? "Deletado com sucesso!" : "Tente novamente!";
    }

    public function search(Request $request){

        $resultado = Colabs::all();

        foreach ($resultado as $colab) {
            $epi = $colab->relEpi()->get();

            dd($epi);
        }

        $relatEnt = $this->objRelatEnt->search($request->filter);

        return view('home',compact('relatEnt'));
    }
}
