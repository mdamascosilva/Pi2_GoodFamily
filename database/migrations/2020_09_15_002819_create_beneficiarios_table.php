<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('documento');
            $table->string('pais_origem');
            $table->string('telefone');
            $table->string('cep');
            $table->string('uf');
            $table->string('ddd');
            $table->string('cidade');
            $table->string('bairro');
            $table->string('rua');
            $table->string('complemento_endereco');
            $table->longText('historia')->nullable();

            //$table ->string('perfil')->nullable();

            $table->foreign('id')
                ->references('id')
                ->on('users');

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
        Schema::dropIfExists('beneficiarios');
    }
}
