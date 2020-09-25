<?php

use Illuminate\Database\Seeder;
use App\Questao;

class QuestoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Questao $questao)
    {
        $questao->create([
            'numero'=>'1',
            'curso_id'=>'1' ,
            'pergunta'=>'qual o seu nivel de ingles?',
            'alternativa1'=>'basico',
            'alternativa2'=>'avancado',
            'alternativa3'=>'intermediario',
            'alternativa4'=>'nao sei',
            'alternativa5'=>'nda'
        ]);

        $questao->create([
            'numero'=>'2',
            'curso_id'=>'1' ,
            'pergunta'=>'quantos anos estuda ingles?',
            'alternativa1'=>'10 anos',
            'alternativa2'=>'3 anos',
            'alternativa3'=>'1 ano',
            'alternativa4'=>'nao sei',
            'alternativa5'=>'nda'
        ]);

        $questao->create([
            'numero'=>'1',
            'curso_id'=>'2' ,
            'pergunta'=>'qual o seu nivel de frances?',
            'alternativa1'=>'basico',
            'alternativa2'=>'avancado',
            'alternativa3'=>'intermediario',
            'alternativa4'=>'nao sei',
            'alternativa5'=>'nda'
        ]);

        $questao->create([
            'numero'=>'1',
            'curso_id'=>'2' ,
            'pergunta'=>'quantos anos estuda frances?',
            'alternativa1'=>'10 anos',
            'alternativa2'=>'3 anos',
            'alternativa3'=>'1 ano',
            'alternativa4'=>'nao sei',
            'alternativa5'=>'nda'
        ]);
    }
}
