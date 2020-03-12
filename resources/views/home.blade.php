<?php
$title = 'Intranet - Home';
?>

@includeif('layouts.head')

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->

<link href="{{ asset('AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('AdminLTE/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="AdminLTE/css/style.css" rel="stylesheet">

<?php
$title = 'Intranet - Home';
?>

@includeif('layouts.head')

<body class="bg-light">
  <header id="header" class="header header-hide">
    <div class="container">

      <div class="text-center">
        <h1><a>CRA-BA - Conselho Regional de Administração da Bahia</h1>
      </div>
      </div>
    </header>
  <!-- Page Content -->
  <div class="container">


    <div class="row align-items-center">
      <div class="container">
        
          <img class="mx-auto d-block rounded" src="LogoCRA.png" alt="">
      </div>
      <div class="mx-auto container" id="hero">
        <h1 id="idh1" class="font-weight-bold text-center text-primary">Bem Vindo!</h1>
        <h3 id="idh3" class="card-text text-dark">Aqui estão todos os sistemas do CRA-BA</h3>
        <img class="mx-auto d-block rounded" src="hero-img.png" alt="">
      </div>
    </div>
    <div class="border-top"></div>
    <div class="border-top my-4"></div>

    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="padd-section text-center wow fadeInUp">

      <div class="container">
        <div class="row">

          <div class="col-md-6 col-lg-4">
            <div class="feature-block">

              <img src="discussion.svg" alt="img" class="img-fluid">
              <h4>Atendimento</h4>
              <p>Modulo de Auxilio para Atendimento</p>
              @if(!Auth::check())
            <a class="btn btn-primary" href="{{ route('login') }}">
              Entrar
            </a>
            @else<a class="btn btn-primary" href="{{ route('atendimento') }}">
              Acessar
            </a>
            @endif

            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="feature-block">

              <img src="browser.svg" alt="img" class="img-fluid">
              <h4>Intranet CRA-BA</h4>
              <p>Informações importantes do CRA-BA</p>
              @if(!Auth::check())
            <a class="btn btn-primary" href="{{ route('login') }}">
              Entrar
            </a>
            @else<a class="btn btn-primary" href="{{ route('painel') }}">
              Acessar
            </a>
            @endif

            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="feature-block">

              <img src="asteroid.svg" alt="img" class="img-fluid">
              <h4>Próxima Ideia</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <a href="#">Acesse</a>

            </div>
          </div>

        </div>
      </div>
    </section><!-- End Get Started Section -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; CRA-BA - Equipe de Desenvolvimento 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="AdminLTE/plugins/jquery/jquery.min.js"></script>
  <script src="AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>