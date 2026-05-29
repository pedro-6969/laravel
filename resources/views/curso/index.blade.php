<div>
    <form action="{{ route('curso.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="periodo">Período</label>
        <input type=text name="periodo" id="periodo">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>

    <table border="1">
        <tr>
            <td>Nome do Curso</td>
            <td>Período</td>
            <td coldspan="2">Ações</td>
        </tr>
        @isset($cursos)
                @foreach ($cursos as $curso)
                    <tr>
                        <td>
                            Curso: {{ $curso->nome }}
                        </td>
                        <td>
                            Período: {{ $curso->periodo }}
                        </td>
                        <td>
                            <form action="{{ route('curso.remove', ['id' => $curso->id]) }}">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                            <button type="submit">Atualizar</button>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>
    
</div>
