<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'pessoa_id', 'categoria', 'tipo_vinculo', 'ocupacao', 'escola_em', 'edital', 'onde_conheceu',
        'esteve_ufscar', 'local_aulas', 'disponibilidade', 'objetivo',
        'cursou_share', 'desistencia',
    ];

    public function pessoa(){
        return $this->hasOne(Pessoa::class, 'pessoa_id');
    }
}
