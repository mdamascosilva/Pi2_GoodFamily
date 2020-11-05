<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNecessidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
        {
            Schema::create('necessidades', function (Blueprint $table) {
            $table->id();
            $table->integer('categoria_id');
            $table->integer('beneficiario_id');
            $table->string('descricao');
            $table->string('status_necessidade');
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
        Schema::dropIfExists('necessidades');
    }
}
