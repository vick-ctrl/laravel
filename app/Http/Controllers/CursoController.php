<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    function index(){
        return view('curso.index');
    }

    function add(Request $dados) {

        $curso = new \App\Models\CursoModel();

        $curso::create($dados->all());

        // RECUPERANDO TODOS CURSOS DO BANCO

        $cursos = new \App\Models\CursoModel();

        return view('curso.index', [
            'success' => 'Cadastrado!',
            'cursos' => $cursos::all()
        ]);
    }

function remove(string $id) {

    $curso = new \App\Models\CursoModel();

    $curso::destroy($id);

    return view('curso.index', [
        'success' => 'Removido!',
        'cursos' => $curso::all()
    ]);
}
function atualizar(string $id) {
    $curso = new \App\Models\CursoModel();
    $curso = $curso::find($id);

    return view('curso.atualizar', ['curso' => $curso]);
}
function save(Request $dados) {
    $curso = new \App\Models\CursoModel();

    $curso = $curso::find($dados->id);

    $curso->update([
        'nome' => $dados->nome,
        'periodo' => $dados->periodo
    ]);

    return view('curso.atualizar', [
        'success' => 'Atualizado!',
        'curso' => $curso
    ]);
}
}
