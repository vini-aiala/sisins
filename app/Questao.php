<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    protected $table = 'questoes';

    public $timestamps = false;
    protected $fillable = [
        'numero',
        'curso_id',
        'pergunta',
        'alternativa1',
        'alternativa2',
        'alternativa3',
        'alternativa4',
        'alternativa5'
    ];

    // relaciona com a tabela respostas
    public function relRespostas(){
        return $this->hasMany(Resposta::class, 'numero_id');
    }
}
