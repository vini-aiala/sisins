<?php

use Illuminate\Database\Seeder;
use App\Inscricao;

class InscricoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Inscricao $inscricoes)
    {
        $inscricoes->create([
            'pessoa_id'=>'1',
            'curso_id'=>'1' ,
            'redacao_entrada'=>'Redação de entrada',
            'status'=>'-1',
        ]);

        /*$inscricoes->create([
            'pessoa_id'=>'2',
            'curso_id'=>'2' ,
            'redacao_entrada'=>'Redação de entrada 2',
            'status'=>'-1',
        ]);*/
    }
}
