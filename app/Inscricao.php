<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
    protected $table = 'inscricoes';
    
    protected $fillable = [
        'pessoa_id',
        'curso_id',
        'redacao_entrada',
        'status'
    ];

    // relaciona com a tabela respostas
    public function relRespostas(){
        return $this->hasMany(Resposta::class, 'inscricao_id');
    }
}
