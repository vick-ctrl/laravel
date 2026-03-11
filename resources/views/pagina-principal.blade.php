<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal de Cursos</title>

    <!-- Bootstrap -->
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
              <a class="nav-link" href="{{ route('pagina-principal') }}">home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('pagina-contato') }}">contato</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('pagina-sobre') }}">sobre</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>


    <!-- BANNER -->
    <section class="bg-light text-center p-5">
      <div class="container">
        <h1 class="display-5">Bem-vindo ao Portal de Cursos</h1>
        <p class="lead">
          Escolha um dos nossos cursos profissionalizantes e desenvolva novas
          habilidades para o mercado de trabalho.
        </p>
      </div>
    </section>


    <!-- CURSOS -->
    <div class="container mt-5">

      <div class="row g-4">

        <!-- Desenvolvimento de Sistemas -->
        <div class="col-md-3">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475" class="card-img-top" alt="programação">
            <div class="card-body">
              <h5 class="card-title">Desenvolvimento de Sistemas</h5>
              <p class="card-text">
                Aprenda programação, criação de sites, banco de dados e
                desenvolvimento de softwares modernos.
              </p>
              <a href="{{ route('pagina-desenvolvimento') }}" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
        </div>

        <!-- Administração -->
        <div class="col-md-3">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978" class="card-img-top" alt="administração">
            <div class="card-body">
              <h5 class="card-title">Administração</h5>
              <p class="card-text">
                Desenvolva habilidades de gestão, planejamento estratégico e
                organização empresarial.
              </p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
        </div>

        <!-- Meio Ambiente -->
        <div class="col-md-3">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6" class="card-img-top" alt="meio ambiente">
            <div class="card-body">
              <h5 class="card-title">Meio Ambiente</h5>
              <p class="card-text">
                Aprenda sobre sustentabilidade, preservação ambiental e gestão
                de recursos naturais.
              </p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
        </div>

        <!-- Farmácia -->
        <div class="col-md-3">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1585435557343-3b092031a831" class="card-img-top" alt="farmácia">
            <div class="card-body">
              <h5 class="card-title">Farmácia</h5>
              <p class="card-text">
                Conheça os princípios da área farmacêutica, medicamentos e
                atendimento em farmácias.
              </p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- RODAPÉ -->
    <footer class="bg-dark text-light text-center p-4 mt-5">
      <p>© 2026 Portal de Cursos - Todos os direitos reservados</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>