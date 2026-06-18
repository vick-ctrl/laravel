<div>
<form action="{{ route('componente.save') }}" method="post">
@csrf
    <input type="hidden" name="id" value="{{ $componente->id }}">

    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" value="{{ $componente->nome }}">

    <br><br>

    <label for="hora_inicio">Hora Início</label>
    <input type="datetime-local" name="hora_inicio" id="hora_inicio"
        value="{{ date('Y-m-d\\TH:i', strtotime($componente->hora_inicio)) }}">

    <br><br>

    <label for="hora_fim">Hora Fim</label>
    <input type="datetime-local" name="hora_fim" id="hora_fim"
        value="{{ date('Y-m-d\\TH:i', strtotime($componente->hora_fim)) }}">

    <br><br>

    <button type="submit">Salvar</button>

    @isset($success)
        <h1>{{ $success }}</h1>
    @endisset
</form>


</div>