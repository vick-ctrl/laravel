<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    function index(){

        return view('professor.index');

    }

    function add(Request $dados) {

        $validator = Validator::make(
            $dados->all(),
    [
        'nome' => 'required|min:3|max:255',
        'email' => 'required|email|max:255',
        'telefone' => 'required|min:8|max:255',
    ],
    [
        'nome.required' => 'O campo nome é obrigatório.',
        'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
        'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',

        'email.required' => 'O campo e-mail é obrigatório.',
        'email.email' => 'Digite um e-mail válido.',
        'email.max' => 'O campo e-mail deve conter no máximo 255 caracteres.',

        'telefone.required' => 'O campo telefone é obrigatório.',
        'telefone.min' => 'O campo telefone deve conter no mínimo 8 caracteres.',
        'telefone.max' => 'O campo telefone deve conter no máximo 255 caracteres.',
    ]
);

if ($validator->fails()) {
    return redirect()
        ->route('professor.index')
        ->withErrors($validator)
        ->withInput();
}

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
