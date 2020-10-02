<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CadastroAlunoController extends Controller
{
    public function exibeCadastro(Request $request)
    {
        return(view('cadastro-aluno'));
    }

    public function processaCadastro(Request $request)
    {
        $this->validator($request->all())->validate();

        $this->create($request->all());

        return redirect()->route('alunos-index');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'categoria' => ['required', 'string', 'max:255'],
            'tipo-vinculo' => ['required', 'string', 'max:255'],
            'ocupacao' => ['required', 'string', 'max:255'],
            'escola-em' => ['nullable', 'string', 'max:255'],
            'edital' => ['required', 'string', 'max:255'],
            'onde-conheceu' => ['required', 'string', 'max:255'],
            'esteve-ufscar' => ['required', 'string', 'max:255'],
            'local-aulas' => ['required', 'string', 'max:255'],
            'disponibilidade' => ['required', 'string', 'max:255'],
            'objetivo' => ['required', 'string', 'max:255'],
            'cursou-share' => ['required', 'string', 'max:255'],
            'desistencia' => ['required', 'string', 'max:255'],
        ]);
    }

    protected function create(array $data)
    {
        $aluno = Aluno::create([
            'pessoa_id'         => Auth::id(),
            'categoria'         => $data['categoria'],
            'tipo_vinculo'      => $data['tipo-vinculo'],
            'ocupacao'          => $data['ocupacao'],
            'escola_em'         => $data['escola-em'],
            'edital'            => $data['edital'],
            'onde_conheceu'     => $data['onde-conheceu'],
            'esteve_ufscar'     => $data['esteve-ufscar'],
            'local_aulas'       => $data['local-aulas'],
            'disponibilidade'   => $data['disponibilidade'],
            'objetivo'          => $data['objetivo'],
            'cursou_share'      => $data['cursou-share'],
            'desistencia'       => $data['desistencia'],
        ]);
        $aluno->save();
    }
}
