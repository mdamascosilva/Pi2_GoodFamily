<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterBeneficiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('beneficiarios', function (Blueprint $table) {
            $table->integer('cidade')->unsigned()->nullable();
            $table->foreign('cidade')->references('id')->on('cidades');

            $table->integer('bairro')->unsigned()->nullable();
            $table->foreign('bairro')->references('id')->on('bairros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('beneficiarios', function (Blueprint $table) {
            $table->dropForeign('beneficiarios_cidades_id_foreign');
            $table->dropColumn('cidade');

            $table->dropForeign('beneficiarios_bairros_id_foreign');
            $table->dropColumn('bairro');
        });
    }
}
