<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background-color: #121212;
    }

    .card {
        background-color: #1e1e1e;
        color: #ffffff;
    }

    .form-control {
        background-color: #2a2a2a;
        border: 1px solid #444;
        color: #fff;
    }

    .form-control:focus {
        background-color: #2a2a2a;
        color: #fff;
        border-color: #0d6efd;
        box-shadow: none;
    }

    .form-label {
        color: #bbb;
    }

    .btn-primary {
        background-color: #0d6efd;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0b5ed7;
    }

    .alert-primary {
        background-color: #0d6efd20;
        color: #6ea8fe;
        border: 1px solid #0d6efd40;
    }
</style>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4 border-0" style="width: 100%; max-width: 400px;">
        <h3 class="text-center mb-4 text-primary">Cadastro de Aluno</h3>

        <form action="{{ route('aluno.adicionar') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu nome">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu email">
            </div>

            <button type="submit" class="btn btn-primary w-100">Salvar</button>

            @isset($sucesso)
                <div class="alert alert-primary mt-3 text-center">
                    {{ $sucesso }}
                </div>
            @endisset
        </form>
    </div>
</div>