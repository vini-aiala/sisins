<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index(Request $request)
    {
        return(view('alunos/index'));
    }

    public function listaCursos(Request $request)
    {
        return(view('alunos/lista'));
    }

    public function prova(Request $request)
    {
        return(view('alunos/prova'));
    }

    public function edicao(Request $request)
    {
        return(view('alunos/edicao'));
    }
}
