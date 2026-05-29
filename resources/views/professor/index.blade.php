<div>
    <form action="{{ route('professor.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="email">E-mail</label>
        <input type="text" name="email" id="email">

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>

    <table border="1">
        <tr>
            <td>Nome do professor</td>
            <td>E-mail</td>
            <td>Telefone</td>
            <td coldspan="2">Ações</td>
        </tr>
        @isset($professores)
                @foreach ($professores as $professor)
                <tr>
                    <td>{{ $professor->nome }}</td>
                    <td>{{ $professor->email }}</td>
                    <td>{{ $professor->telefone }}</td>
                    <td>
                    <form action="{{ route('professor.remove', ['id'=> $professor->id]) }}" method="GET">
                        <button type="submit">Remover</button>
                    </form>
                    </td>
                    <td><button type="submit">Atualizar</button></td>
                </tr>
                @endforeach
        @endisset
    </table>
</div>
