<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Cursos extends Controller
{
  function show()
    {
        $cursos = [
            [
                'nome' => 'Matemática Avançada',
                'professor' => 'Dr. João Silva',
                'periodo' => 'Manhã',
            ],
            [
                'nome' => 'Física Aplicada',
                'professor' => 'Prof. Ana Souza',
                'periodo' => 'Tarde',
            ],
            [
                'nome' => 'Química Orgânica',
                'professor' => 'Dr. Carlos Pereira',
                'periodo' => 'Noite',
            ],
            [
                'nome' => 'História Geral',
                'professor' => 'Prof. Maria Oliveira',
                'periodo' => 'Manhã',
            ],
            [
                'nome' => 'Programação em PHP',
                'professor' => 'Eng. Lucas Santos',
                'periodo' => 'Tarde',
            ],
        ];

        return view('curso', compact('cursos'));
    }
}