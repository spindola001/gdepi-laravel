<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelatorioEntregasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatorio_entrega_tbl', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('epi_id');
            $table->foreign('epi_id')->references('id')->on('epis_tbl')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('colab_id');
            $table->foreign('colab_id')->references('id')->on('colab_tbl')->onUpdate('cascade')->onDelete('cascade');
            $table->date('dataEntrega');
            $table->integer('qtdEpi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relatorio_entrega_tbl');
    }
}
