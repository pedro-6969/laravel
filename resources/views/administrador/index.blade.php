<div>
<form action="{{ route('administrador.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="email">E-mail</label>
        <input type="text" name="email" id="email">

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone">
        
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf">

        <label for="usuario">Usuário</label>
        <input type="text" name="usuario" id="usuario">

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">

        <label for="status">Status</label>
        <input type="text" name="status" id="status">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>

    @isset($administradores)
            @foreach($administradores as $administrador)
                <h3>Nome {{ $administrador->nome }} - E-mail {{ $administrador->email }} - Telefone {{ $administrador->telefone }} - CPF {{ $administrador->cpf }} - Usuário {{ $administrador->usuario }} - Senha {{ $administrador->senha }} - Status {{ $administrador->status }}</h3>
            @endforeach
    @endisset
</div>
