<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaRespostas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respostas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inscricao_id');
            $table->unsignedBigInteger('numero_id');
            $table->integer('alternativa');
        });

        Schema::table('respostas', function (Blueprint $table) {
            $table->foreign('inscricao_id')->references('id')->on('questoes')->onDelete('cascade');
            $table->foreign('numero_id')->references('id')->on('questoes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respostas');
    }
}
