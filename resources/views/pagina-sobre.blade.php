<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Sobre a Instituição</title>

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
          <a class="nav-link active" href="{{ route('pagina-sobre') }}">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('pagina-contato') }}">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- HEADER -->
<header class="bg-primary text-white text-center p-5">
  <div class="container">
    <h1>Sobre Nossa Instituição</h1>
    <p>Formando profissionais preparados para o mercado de trabalho.</p>
  </div>
</header>


<!-- SOBRE A INSTITUIÇÃO -->
<section class="container my-5">

  <div class="row align-items-center">

    <div class="col-md-6">
      <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1" class="img-fluid rounded" alt="instituição de ensino">
    </div>

    <div class="col-md-6">
      <h2>Nossa História</h2>
      <p>
        Nossa instituição foi fundada com o objetivo de oferecer ensino técnico
        de qualidade, preparando jovens e adultos para os desafios do mercado
        de trabalho moderno.
      </p>

      <p>
        Ao longo dos anos, expandimos nossos cursos e infraestrutura,
        oferecendo formações nas áreas de tecnologia, gestão, indústria
        e meio ambiente.
      </p>

      <p>
        Nosso compromisso é formar profissionais qualificados,
        éticos e preparados para contribuir com a sociedade.
      </p>

    </div>

  </div>

</section>


<!-- MISSÃO VISÃO VALORES -->
<section class="bg-light py-5">

<div class="container">

<h2 class="text-center mb-4">Nossa Filosofia</h2>

<div class="row g-4">

<div class="col-md-4">
<div class="card h-100 text-center">
<div class="card-body">
<h4 class="card-title">Missão</h4>
<p class="card-text">
Oferecer educação técnica de qualidade,
capacitando estudantes para atuar com competência
no mercado de trabalho.
</p>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card h-100 text-center">
<div class="card-body">
<h4 class="card-title">Visão</h4>
<p class="card-text">
Ser referência em ensino técnico e inovação,
formando profissionais que impactem positivamente
a sociedade.
</p>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card h-100 text-center">
<div class="card-body">
<h4 class="card-title">Valores</h4>
<p class="card-text">
Ética, responsabilidade, inovação,
qualidade no ensino e compromisso
com o desenvolvimento dos alunos.
</p>
</div>
</div>
</div>

</div>

</div>

</section>


<!-- FOOTER -->
<footer class="bg-dark text-white text-center p-3">
<p>© 2026 Portal de Cursos Técnicos</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>