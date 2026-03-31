@foreach ($cursos as $curso)
    <h3>Nome do curso: {{ $curso->nome_do_curso }}</h3>
    <h3>Horário: {{ $curso->horario }}</h3>
    <hr>
@endforeach
