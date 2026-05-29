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
    <table border="1">
        <tr>
            <td>Componente</td>
            <td>Hora início</td>
            <td>Hora fim</td>
            <td coldspan="2">Ações</td>
        </tr>
        @isset($componentes)
            @foreach ($componentes as $componente)
                <tr>
                    <td>{{ $componente->nome }}</td>
                    <td>{{ $componente->hora_inicio }}</td>
                    <td>{{ $componente->hora_fim }}</td>
                    <td>
                        <form action="{{ route('componente.remove', ['id' => $componente->id]) }}" method="GET">
                            <button type="submit">Remover</button>
                        </form>    
                    </td>
                    <td><button type="submit">Atualizar</button></td>
                </tr>
            @endforeach
        @endisset
    </table>
</div>
