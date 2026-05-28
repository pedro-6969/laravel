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
    </form>

    @isset($professores)
            @foreach ($professores as $professor)
                <h3> Nome {{ $professor->nome }} - E-mail {{ $professor->email }} - Telefone {{ $professor->telefone }}</h3>
            @endforeach
    @endisset
</div>
