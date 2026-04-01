<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Componentes extends Controller
{
  function show()
    {
        $componentes = 
        [
            ['nome' => 'Matemática', 'horario' => '08:00'],
            ['nome' => 'História', 'horario' => '10:00'],
            ['nome' => 'Física', 'horario' => '12:00'],
            ['nome' => 'Química', 'horario' => '14:00'],
            ['nome' => 'Biologia', 'horario' => '16:00'],
        ];

        return view('componente', compact('componentes'));
    }
}