<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaQuestoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questoes', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->unsignedBigInteger('curso_id');
            $table->text('pergunta');
            $table->text('alternativa1');
            $table->text('alternativa2');
            $table->text('alternativa3');
            $table->text('alternativa4');
            $table->text('alternativa5');
        });

        Schema::table('questoes', function (Blueprint $table) {
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
        Schema::dropIfExists('questoes');
    }
}
