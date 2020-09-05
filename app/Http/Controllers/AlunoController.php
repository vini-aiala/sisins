<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return(view('alunos/index'));
    }

    public function listaCursos()
    {
        return(view('alunos/lista'));
    }

    public function prova()
    {
        return(view('alunos/prova'));
    }

    public function edicao()
    {
        return(view('alunos/edicao'));
    }
}
