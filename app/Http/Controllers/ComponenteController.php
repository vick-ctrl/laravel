<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponenteController extends Controller
{
    function index(){

        return view('componente.index');

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

    
