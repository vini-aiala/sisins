<?php

use Illuminate\Database\Seeder;
use App\Curso;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Curso $curso)
    {
        $curso->create([
            'nome'=>'ingles',
            'categoria'=>'intermediario' ,
            'horario'=>'10 as 12',
        ]);

        $curso->create([
            'nome'=>'frances',
            'categoria'=>'intermediario' ,
            'horario'=>'15 as 16',
        ]);
    }
}
