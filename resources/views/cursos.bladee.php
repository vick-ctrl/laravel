@foreach($cursos as $curso)
<h3>{{ $curso->nome}}</h3>
<h3>{{ $curso->periodo}}</h3>
<h3>{{ $curso->professor}}</h3>

@endforeach()