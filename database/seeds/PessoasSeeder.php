<?php

use Illuminate\Database\Seeder;
use App\Pessoa;

class PessoasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Pessoa $pessoas)
    {
        $pessoas->create([
            'nome'=>'Renan Oliveira',
            'email'=>'renan@gmail.com' ,
            'password'=>bcrypt('123456789'),
            'telefone'=>'1120000000',
            'data_nascimento'=> '04042000'
        ]);

        $pessoas->create([
            'nome'=>'Fulano da Silva',
            'email'=>'fulano@gmail.com' ,
            'password'=>bcrypt('123456789'),
            'telefone'=>'1120000000',
            'data_nascimento'=> '04042000'
        ]);
    }
}
