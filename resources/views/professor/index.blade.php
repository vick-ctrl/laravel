<div>

    <form action="{{ route('professor.add') }}" method="post">

        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"value="{{ old('nome') }}">
        
        <br><br>

        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}">

        <br><br>

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" value="{{ old('telefone') }}">

        <br><br>

        <button type="submit">Salvar</button>
        

        @isset($success)

            <h1>{{ $success }}</h1>

        @endisset

        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    </form>

    @isset($professores)

        @foreach($professores as $professor)

            <h3>{{ $professor->nome }}</h3>

            <h3>{{ $professor->email }}</h3>

            <h3>{{ $professor->telefone }}</h3>
            
    <td>
            <form action="{{ route('professor.remove', ['id' => $professor->id]) }}" method="GET">
                <button type="submit">Remover</button>
            </form>
         
            <form action="{{ route('professor.atualizar', ['id' => $professor->id]) }}" method="GET">
                <button type="submit">Atualizar</button>
            </form>
   </td>
        @endforeach

    @endisset

</div>