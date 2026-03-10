<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Contato</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Portal de Cursos</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('pagina-principal') }}">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('pagina-cursos') }}">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('pagina-sobre') }}">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('pagina-contato') }}">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- HEADER -->
<header class="bg-primary text-white text-center p-5">
  <div class="container">
    <h1>Entre em Contato</h1>
    <p>Tem alguma dúvida? Fale conosco.</p>
  </div>
</header>


<!-- CONTATO -->
<section class="container my-5">

<div class="row">

<!-- FORMULÁRIO -->
<div class="col-md-6">

<h3>Envie uma mensagem</h3>

<form>

<div class="mb-3">
<label class="form-label">Nome</label>
<input type="text" class="form-control" placeholder="Digite seu nome">
</div>

<div class="mb-3">
<label class="form-label">Email</label>
<input type="email" class="form-control" placeholder="Digite seu email">
</div>

<div class="mb-3">
<label class="form-label">Assunto</label>
<input type="text" class="form-control" placeholder="Digite o assunto">
</div>

<div class="mb-3">
<label class="form-label">Mensagem</label>
<textarea class="form-control" rows="4" placeholder="Digite sua mensagem"></textarea>
</div>

<button type="submit" class="btn btn-primary">Enviar Mensagem</button>

</form>

</div>


<!-- INFORMAÇÕES -->
<div class="col-md-6">

<h3>Informações</h3>

<p><strong>Endereço:</strong><br>
Rua Exemplo, 123<br>
São Paulo - SP</p>

<p><strong>Telefone:</strong><br>
(11) 99999-9999</p>

<p><strong>Email:</strong><br>
contato@portalcursos.com</p>

<p>
Nossa equipe está disponível para esclarecer dúvidas
sobre cursos, matrículas e informações institucionais.
</p>

</div>

</div>

</section>


<!-- MAPA -->
<section class="container mb-5">

<h3 class="text-center mb-4">Nossa Localização</h3>

<div class="ratio ratio-16x9">
<iframe src="https://www.google.com/maps?q=Sao+Paulo&output=embed"></iframe>
</div>

</section>


<!-- FOOTER -->
<footer class="bg-dark text-white text-center p-3">
<p>© 2026 Portal de Cursos Técnicos</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>