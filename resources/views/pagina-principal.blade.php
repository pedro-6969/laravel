<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Cursos Técnicos</title>

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
          <a class="nav-link active" href="{{ route('pagina-principal') }}">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('pagina-cursos') }}">Cursos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('pagina-sobre') }}">Sobre</a>
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
    <h1>Conheça Nossos Cursos Técnicos</h1>
    <p>Escolha uma área profissional e comece sua carreira hoje mesmo.</p>
  </div>
</header>


<!-- SEÇÃO DE CURSOS -->
<section class="container my-5">

  <h2 class="text-center mb-4">Cursos Disponíveis</h2>

  <div class="row g-4">

    <!-- Desenvolvimento de Sistemas -->
    <div class="col-md-6 col-lg-3">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475" class="card-img-top" alt="programação">
        <div class="card-body">
          <h5 class="card-title">Desenvolvimento de Sistemas</h5>
          <p class="card-text">
            Aprenda programação, banco de dados, desenvolvimento web e criação de softwares modernos.
          </p>
          <a href="{{ route('desenvolvimento-sistemas') }}" class="btn btn-primary">Ver Curso</a>
        </div>
      </div>
    </div>

    <!-- Administração -->
    <div class="col-md-6 col-lg-3">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1556745757-8d76bdb6984b" class="card-img-top" alt="administração">
        <div class="card-body">
          <h5 class="card-title">Administração</h5>
          <p class="card-text">
            Desenvolva habilidades de gestão empresarial, finanças, marketing e organização de empresas.
          </p>
          <a href="{{ route('administracao') }}" class="btn btn-primary">Ver Curso</a>
        </div>
      </div>
    </div>

    <!-- Meio Ambiente -->
    <div class="col-md-6 col-lg-3">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6" class="card-img-top" alt="meio ambiente">
        <div class="card-body">
          <h5 class="card-title">Meio Ambiente</h5>
          <p class="card-text">
            Estude sustentabilidade, preservação ambiental e gestão de recursos naturais.
          </p>
          <a href="{{ route('meio-ambiente') }}" class="btn btn-primary">Ver Curso</a>
        </div>
      </div>
    </div>

    <!-- Mecatrônica -->
    <div class="col-md-6 col-lg-3">
      <div class="card h-100">
        <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758" class="card-img-top" alt="mecatrônica">
        <div class="card-body">
          <h5 class="card-title">Mecatrônica</h5>
          <p class="card-text">
            Aprenda robótica, automação industrial, eletrônica e integração de sistemas mecânicos.
          </p>
          <a href="{{ route('mecatronica') }}" class="btn btn-primary">Ver Curso</a>
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