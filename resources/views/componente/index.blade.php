<div>

    <form action="{{ route('componente.add') }}" method="post">

        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"value="{{ old('nome') }}">

        <<label for="hora_inicio">Hora de início</label>
        <input type="datetime-local" name="hora_inicio" id="hora_inicio" value="{{ old('hora_inicio') }}">

        <br><br>

        <label for="hora_fim">Hora de fim</label>
        <input type="datetime-local" name="hora_fim" id="hora_fim" value="{{ old('hora_fim') }}">

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

    <hr>

    @isset($componentes)

        @foreach($componentes as $componente)

            <h3>Nome: {{ $componente->nome }}</h3>

            <p>Hora Início: {{ $componente->hora_inicio }}</p>

            <p>Hora Fim: {{ $componente->hora_fim }}</p>

            <hr>

     <form action="{{ route('componente.remove', ['id' => $componente->id]) }}" method="GET">

        <button type="submit">Remover</button>
        <td>
            <form action="{{ route('componente.atualizar', ['id' => $componente->id]) }}" method="GET">
        <button type="submit">Atualizar</button>
        
    </form>
</td>

       </form>
        @endforeach

    @endisset

</div>