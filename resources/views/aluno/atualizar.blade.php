<div>
    <form action="{{ route('aluno.save') }}" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $aluno->id }}">

        <label for="nome">Nome</label>
        <input type="text" name="Nome" id="nome" value="{{ $aluno->nome }}">

        <button type="submit">Salvar</button>
        @isset($sucess)
            <h1>{{ $sucess }}</h1>
        @endisset
    </form>
</div>
