<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComponenteController extends Controller
{
    function index(){

        return view('componente.index');

    }

    $validator = Validator::make(
    $dados->all(),
    [
        'nome' => 'required|min:3|max:255',
        'hora_inicio' => 'required|date',
        'hora_fim' => 'required|date|after:hora_inicio',
    ],
    [
        'nome.required' => 'O campo nome é obrigatório.',
        'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
        'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',

        'hora_inicio.required' => 'O campo hora de início é obrigatório.',
        'hora_inicio.date' => 'Digite uma data e hora válida para o início.',

        'hora_fim.required' => 'O campo hora de fim é obrigatório.',
        'hora_fim.date' => 'Digite uma data e hora válida para o fim.',
        'hora_fim.after' => 'A hora de fim deve ser depois da hora de início.',
    ]
);

if ($validator->fails()) {
    return redirect()
        ->route('componente.index')
        ->withErrors($validator)
        ->withInput();
}

    function add(Request $dados){

        $componente = new \App\Models\ComponenteModel();

        $componente::create($dados->all());

        // RECUPERANDO TODOS COMPONENTES

        $componentes = new \App\Models\ComponenteModel();

        return view('componente.index', [
            'success' => 'Cadastrado!',
            'componentes' => $componentes::all()
        ]);
    
}
function remove(string $id) {

    $componente = new \App\Models\ComponenteModel();

    $componente::destroy($id);

    return view('componente.index', [
        'success' => 'Removido!',
        'componentes' => $componente::all()
    ]);
}
    function atualizar(string $id) {
    $componente = new \App\Models\ComponenteModel();
    $componente = $componente::find($id);
    return view('componente.atualizar', ['componente' => $componente]);

}
function save(Request $dados) {
    $componente = new \App\Models\ComponenteModel();
    $componente = $componente::find($dados->id);
    
    $componente->update([
        'nome' => $dados->nome,
        'hora_inicio' => $dados->hora_inicio,
        'hora_fim' => $dados->hora_fim
    ]);
    
    return view('componente.atualizar', [
        'success' => 'Atualizado!',
        'componente' => $componente
    ]);
    
    }
}

    
