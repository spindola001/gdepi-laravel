<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colabs extends Model
{
    protected $table='colab_tbl';
    protected $fillable=['nome', 'funcao', 'setor', 'adm_at'];

    public function relEpi(){
        return $this->hasMany('App\RelatorioEntrega', 'id_colab');
    }
}
