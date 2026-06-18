<div>

    <form action="{{ route('curso.add') }}" method="post">

        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ old('nome') }}">
        <label for="periodo">Periodo</label>
        <input type="text" name="periodo" id="periodo" value="{{ old('periodo') }}">

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

    @isset($cursos)

        @foreach($cursos as $curso)

            <h3>{{ $curso->nome }}</h3>
            <h3>{{ $curso->periodo }}</h3>

            <form action="{{ route('curso.remove', ['id' => $curso->id]) }}" method="GET">
                <button type="submit">Remover</button>
            </form>

            <form action="{{ route('curso.atualizar', ['id' => $curso->id]) }}" method="GET">
                <button type="submit">Atualizar</button>
            </form>

        @endforeach

    @endisset

</div>