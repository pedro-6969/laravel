<div>
        <form action="{{ route('componente.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="hora_inicio">Hora início</label>
        <input type="datetime-local" name="hora_inicio" id="hora_inicio">

        <label for="hora_fim">Hora fim</label>
        <input type="datetime-local" name="hora_fim" id="hora_fim">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>
    @isset($componentes)
            @foreach ($componentes as $componente)
                <h3>Nome {{ $componente->nome }} - Hora início {{ $componente->hora_inicio }} - Hora fim {{ $componente->hora_fim }}</h3>
            @endforeach
    @endisset
</div>
