@foreach ($componentes as $componente)
    <h3>Nome: {{ $componente->nome }}</h3>
    <h3>Horário: {{ $componente->horario }}</h3>
    <hr>
@endforeach
