<?php

use Illuminate\Database\Seeder;
use App\Resposta;

class RespostasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Resposta $respostas)
    {
        $respostas->create([
            'inscricao_id'=>'1',
            'numero_id'=>'1',
            'alternativa'=>'1'
        ]);

        $respostas->create([
            'inscricao_id'=>'1',
            'numero_id'=>'2',
            'alternativa'=>'3'
        ]);

        /*$respostas->create([
            'inscricao_id'=>'2',
            'numero_id'=>'1',
            'alternativa'=>'1'
        ]);

        $respostas->create([
            'inscricao_id'=>'2',
            'numero_id'=>'2',
            'alternativa'=>'3'
        ]);*/
    }
}
