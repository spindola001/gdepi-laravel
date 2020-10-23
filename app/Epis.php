<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Epis extends Model
{
    protected $table="epis_tbl";
    protected $fillable=['descricao', 'certAp'];

    public function relColab()
    {
        return $this->hasMany('App\RelatorioEntrega', 'epi_id');
    }
}
