<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaInscricoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscricoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pessoa_id');
            $table->unsignedBigInteger('curso_id');
            $table->text('redacao_entrada');
            $table->integer('status');
            $table->timestamps();
        });

        Schema::table('inscricoes', function (Blueprint $table) {
            $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('cascade');
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscricoes');
    }
}
