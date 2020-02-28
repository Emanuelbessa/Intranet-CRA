<?php
$title = 'Intranet - Atendimento';
?>

<!DOCTYPE html>
<html lang="pt-BR">
@includeif('layouts.head')

<body class="">

    
    
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item d-none d-sm-inline-block">
            <a href="painel" class="nav-link">Home</a>
          </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Novo Atendimento</a>
 </li>
 <li class="nav-item d-none d-sm-inline-block">
  <a href="#" class="nav-link">Contato</a>
</li>
    </ul>
 </nav>

 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Olá, Nome</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


<div class="row justify-content-center" >
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>150</h3>

        <p>Atendimentos Feitos Hoje</p>
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
        <h3>150</h3>

        <p>Atendimentos Feitos Hoje</p>
      </div>
      <div class="icon">
        <i class="fas fa-search"></i>
      </div>
      <a href="#" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

</div>

<div class="row justify-content-center" >
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
        <div class="small-box bg-info">
          <div class="inner">
            <h3>150</h3>
    
            <p>Atendimentos Feitos Hoje</p>
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
<script src="{{ asset ('AdminLTE/plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset ('AdminLTE/dist/js/demo.js') }}"></script>
<script src="{{ asset ('AdminLTE/dist/js/pages/dashboard3.js') }}"></script>
</body>
</html>
