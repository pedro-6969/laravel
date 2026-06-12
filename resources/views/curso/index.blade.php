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
        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
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
                            <form action="{{ route('curso.remove', ['id' => $curso->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('curso.atualizar', ['id'=> $curso->id]) }}" method="GET"> 
                                <button type="submit">Atualizar</button>
                            </form> 
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>
    
</div>
