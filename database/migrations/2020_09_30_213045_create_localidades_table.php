<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('localidades', function (Blueprint $table) {
            
            $table->string("uf");
            
            $table->integer('regiao_id')->unsigned()->nullable();
            $table->foreign('regiao_id')->references('id')->on('regioes');

            $table->integer('cidade_id')->unsigned()->nullable();
            $table->foreign('cidade_id')->references('id')->on('cidades');

            $table->integer('bairro_id')->unsigned()->nullable();
            $table->foreign('bairro_id')->references('id')->on('bairros');

        });
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*
        Schema::dropIfExists('localidades');
        */
    }
}
