<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaAlunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('pessoas');
            $table->string('categoria');
            $table->string('tipo_vinculo');
            $table->string('ocupacao');
            $table->string('escola_em')->nullable();
            $table->string('edital');
            $table->string('onde_conheceu');
            $table->string('esteve_ufscar');
            $table->string('local_aulas');
            $table->string('disponibilidade');
            $table->string('objetivo');
            $table->string('cursou_share');
            $table->string('desistencia');
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
        Schema::dropIfExists('alunos');
    }
}
