<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    function show(){
         $professores = [
            (Object) ['nome'=>'seleide','telefone'=>'1234', 'email'=>'ketylinda@keugw'],
            (Object) ['nome'=>'kety','telefone'=>'13444555', 'email'=>'kewewwk@eugw'],
            (Object) ['nome'=>'vick','telefone'=>'43527153', 'email'=>'visdkj@keugw'],
         ];







        return view('professor', compact('professores'));

    }
}
