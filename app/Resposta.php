<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    protected $table = 'respostas';

    public $timestamps = false;

    protected $fillable = [
        'inscricao_id',
        'numero_id',
        'alternativa'
    ];


}
