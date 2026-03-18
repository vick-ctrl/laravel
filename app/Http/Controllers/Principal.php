<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contato extends Controller
{
    function contato(string $nome){
        //echo "O nome do contato é: $nome";
        $contato = [
          "nome"=> $nome
        ];
        return view('contato',$contato);
    }
}

 function contatoNomeCompleto(string $nome, string $sobrenome){
        echo "O nome completo é: $nome $sobrenome";
    }

 function assunto(string $nome, string $sobrenome, string $assunto){
        echo "<h1>Contato: $nome $sobrenome</h1>";
        echo $assunto;
    }

 function mensagem(
        string $nome, 
        string $sobrenome, 
        string $assunto,
        string $email, 
        string $telefone = 'Telefone não informado'
    ){
        echo "<h1>Contato: $nome $sobrenome</h1>";
        echo "<p>$assunto</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Telefone: $telefone</p>";
    }
