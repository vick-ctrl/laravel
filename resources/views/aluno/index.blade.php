<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro de Aluno</title>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body{
        background: linear-gradient(135deg, #111, #444, #ddd);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container{
        background: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        width: 350px;
    }

    .container h2{
        text-align: center;
        margin-bottom: 20px;
        color: #111;
    }

    label{
        display: block;
        margin-top: 10px;
        margin-bottom: 5px;
        color: #333;
        font-weight: bold;
    }

    input{
        width: 100%;
        padding: 10px;
        border: 1px solid #999;
        border-radius: 8px;
        outline: none;
        background: #f5f5f5;
        transition: 0.3s;
    }

    input:focus{
        border-color: #111;
        box-shadow: 0 0 5px rgba(0,0,0,0.4);
        background: #fff;
    }

    button{
        width: 100%;
        margin-top: 20px;
        padding: 12px;
        border: none;
        border-radius: 8px;
        background: #111;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover{
        background: #444;
    }

    .sucesso{
        margin-top: 15px;
        text-align: center;
        color: #111;
        font-weight: bold;
    }
</style>
</head>
<body>

<div class="container">
    <h2>Cadastro de Aluno</h2>

    <form action="{{ route('aluno.adicionar') }}" method="post">

        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome">

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail">

        <button type="submit">Salvar</button>

        @isset($sucesso)
            <p class="sucesso">{{ $sucesso }}</p>
        @endisset

    </form>
</div>

</body>
</html>