<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtendimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atendimentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('necessidade_id');
            $table->unsignedBigInteger('apoiador_id');
            $table->text('descricao')->nullable();
            $table->timestamps();
            $table->dateTime('fim_atendimento')->nullable();

            $table->foreign('necessidade_id')
            ->references('id')
            ->on('necessidades');

            $table->foreign('apoiador_id')
            ->references('id')
            ->on('apoiadors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atendimentos');
    }
}
