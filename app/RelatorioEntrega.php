<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Colabs;
use Illuminate\Support\Facades\DB;

class RelatorioEntrega extends Model
{
    protected $table = "relatorio_entrega_tbl";
    protected $fillable = ['dataEntrega','qtdEpi', 'epi_id', 'colab_id'];

    private $objColab;

    public function __construct() {
        $this->objColab= new Colabs();
    }

    public function relEpi(){
        return $this->hasOne('App\Epis', 'id', 'epi_id');
    }

    public function relColab(){
        return $this->hasOne('App\Colabs', 'id', 'colab_id');
    }

    public function search($filter = null){




        // $results = $this->where(function ($query) use ($filter){
        //     // $relat=$this->all();

        //     // dd($users);
        //     // $users =
        //         // ->get();

        //     // dd($users);

        //     if ($filter){
        //         // $query->;
        //         DB::table('relatorio_entrega_tbl')
        //         ->join('colab_tbl', 'colab_tbl.id', '=', 'relatorio_entrega_tbl.colab_id')
        //         ->$query
        //         ->where('', 'LIKE', "%{$filter}%");
        //     }
        // })->paginate();

        dd($results);

        return $results;
    }
}
