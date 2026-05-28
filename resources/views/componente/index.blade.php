<div>

    <form action="{{ route('componente.add') }}" method="post">

        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <br><br>

        <label for="hora_inicio">Hora Início</label>
        <input type="datetime-local" name="hora_inicio" id="hora_inicio">

        <br><br>

        <label for="hora_fim">Hora Fim</label>
        <input type="datetime-local" name="hora_fim" id="hora_fim">

        <br><br>

        <button type="submit">Salvar</button>

        

        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset

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

       </form>
        @endforeach

    @endisset

</div>