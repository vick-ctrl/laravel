@foreach($professores as $professor)
<h3>{{ $professor->nome}}</h3>
<h3>{{ $professor->telefone}}</h3>
<h3>{{ $professor->email}}</h3>

@endforeach()