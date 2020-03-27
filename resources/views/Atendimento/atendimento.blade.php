<?php
$title = 'Intranet - Atendimento';
?>

<!DOCTYPE html>
<html lang="pt-BR">
@includeif('layouts.head')

<body class="hold-transition sidebar-mini">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('atendimentoNovo') }}" class="nav-link">Novo Atendimento</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contato</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-cogs"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          @if(!Auth::check())
          <a class="dropdown-item" href="{{ route('login') }}">
            <i class="fas fa-file mr-2"></i>Entrar
          </a>
          @else
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}">
            <i class="fas fa-file mr-2"></i>Sair
          </a>
          @endif
        </div>
      </li>
    </ul>
  </nav>


  @includeif('layouts.sidebarAtendimento')

  <div class="row justify-content-center">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{$atendimentosfeitos}}</h3>
          <p>Atendimentos Totais Feitos Hoje</p>
        </div>
        <div class="icon">
          <i class="fas fa-search"></i>
        </div>
        <a href="#" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{$atendimentostelefone}}</h3>
          <p>Atendimentos Por Telefone Feitos Hoje</p>
        </div>
        <div class="icon">
          <i class="fas fa-search"></i>
        </div>
        <a href="#" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>Novo Atendimento</h3>
          <p>Iniciar novo Atendimento</p>
        </div>
        <div class="icon">
          <i class="fas fa-plus"></i>
        </div>
        <a href="atendimento/novo" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-secondary">
        <div class="inner">
          <h3>XXX</h3>
          <p>Ver um atendimento</p>
        </div>
        <div class="icon">
          <i class="fas fa-search"></i>
        </div>
        <a href="#" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>

  </div>

  @includeif('layouts.footer')
  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="{{ asset ('AdminLTE/plugins/jquery/jquery.min.js') }} "></script>
  <!-- Bootstrap -->
  <script src="{{ asset ('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE -->
  <script src="{{ asset ('AdminLTE/dist/js/adminlte.js') }}"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="{{ asset ('AdminLTE/dist/js/demo.js') }}"></script>
</body>
</html>