<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produto extends Controller
{
    function listar(){
        $produtos = [
            "produto1" => ["id"=>1, "nome"=>"computador","preco"=>2000],
            "produto2" => ["id"=>2, "nome"=>"notebook","preco"=>3500],
            "produto3" => ["id"=>3, "nome"=>"mouse","preco"=>50],
            "produto4" => ["id"=>4, "nome"=>"teclado","preco"=>120],
            "produto5" => ["id"=>5, "nome"=>"monitor","preco"=>900],
            "produto6" => ["id"=>6, "nome"=>"impressora","preco"=>600],
            "produto7" => ["id"=>7, "nome"=>"webcam","preco"=>150],
            "produto8" => ["id"=>8, "nome"=>"fone de ouvido","preco"=>200],
            "produto9" => ["id"=>9, "nome"=>"caixa de som","preco"=>300],
            "produto10" => ["id"=>10, "nome"=>"tablet","preco"=>1200],
            "produto11" => ["id"=>11, "nome"=>"celular","preco"=>2500],
            "produto12" => ["id"=>12, "nome"=>"carregador","preco"=>80],
            "produto13" => ["id"=>13, "nome"=>"pendrive","preco"=>40],
            "produto14" => ["id"=>14, "nome"=>"hd externo","preco"=>450],
            "produto15" => ["id"=>15, "nome"=>"ssd","preco"=>500],
            "produto16" => ["id"=>16, "nome"=>"placa de video","preco"=>1800],
            "produto17" => ["id"=>17, "nome"=>"processador","preco"=>1300],
            "produto18" => ["id"=>18, "nome"=>"memoria ram","preco"=>300],
            "produto19" => ["id"=>19, "nome"=>"fonte","preco"=>350],
            "produto20" => ["id"=>20, "nome"=>"gabinete","preco"=>400],
            "produto21" => ["id"=>21, "nome"=>"cooler","preco"=>150]
        ];

        return view('estoque',["produtos"=>$produtos]);

    }
}


