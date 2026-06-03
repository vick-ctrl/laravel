<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    function index(){

        return view('professor.index');

    }

    function add(Request $dados) {

        $professor = new \App\Models\ProfessorModel();

        $professor::create($dados->all());

        // RECUPERANDO TODOS PROFESSORES

        $professores = new \App\Models\ProfessorModel();

        return view('professor.index', [

            'success' => 'Cadastrado!',

            'professores' => $professores::all()

        ]);
    }

function remove(string $id) {

    $professor = new \App\Models\ProfessorModel();

    $professor::destroy($id);

    return view('professor.index', [
        'success' => 'Removido!',
        'professores' => $professor::all()
    ]);
    
function atualizar(string $id) {
        
    $professor = new \App\Models\ProfessorModel();
        
    $professor = $professor::find($id);
    
        return view('professor.atualizar', ['professor' => $professor]);
    }
 function atualizar(string $id) {
        $professor = new \App\Models\ProfessorModel();
        $professor = $professor::find($id);
    
        return view('professor.atualizar', ['professor' => $professor]);
    }
}
function save(Request $dados) {
    $professor = new \App\Models\ProfessorModel();

    $professor = $professor::find($dados->id);

    $professor->update([
        'nome' => $dados->nome,
        'email' => $dados->email,
        'telefone' => $dados->telefone
    ]);

    return view('professor.atualizar', [
        'success' => 'Atualizado!',
        'professor' => $professor
    ]);
}
}
