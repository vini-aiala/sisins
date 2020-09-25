<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';

    public $timestamps = false;

    protected $fillable = [
        'nome',
        'categoria',
        'horario'
    ];

    // relaciona com a tabela questoes
    public function relQuestoes(){
        return $this->hasMany(Questao::class, 'curso_id');
    }

    // relaciona com a tabela inscricoes
    public function relInscricoes(){
        return $this->hasMany(Inscricao::class, 'curso_id');
    }
}
