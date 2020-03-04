
<!DOCTYPE html>
@section('js')
@parent

@endsection
<html>
    <?php
    $title = 'Intranet - Novo Atendimento';
    ?>
<head>

  @includeif('layouts.head')
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  @includeif('layouts.sidebarAtendimento')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Novo Atendimento</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Atendimento</a></li>
              <li class="breadcrumb-item active">Novo Atendimento</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="card card-warning col-md-6">
              <div class="card-header">
                <h3 class="card-title">Situação do Registro</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-6">
                        <!-- radio -->
                        <label>Marque se registrado ou não</label>
                        <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="TipoRegistro" id="registrado">
                            <label class="form-check-label">Registrado</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="TipoRegistro" id="naoregistrado">
                            <label class="form-check-label">Não Registrado</label>
                          </div>
                        </div>
                      </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card card-warning col-md-6">
              <div class="card-header">
                <h3 class="card-title">Selecione Pessoa Física ou Pessoa Jurídica</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-6">
                        <label>Selecione PF ou PJ</label>
                        <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="PFPJ">
                              <label class="form-check-label">Pessoa Física</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="PFPJ">
                              <label class="form-check-label">Pessoa Jurídica</label>
                            </div>
                        </div> 
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Informações</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nome/Nome Fantasia</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nome">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">CPF/CNPJ</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="CPF/CNPJ">
                  </div>
                </div>
                <!-- /.card-body --> 
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
          <!-- right column-->
          <div class="col-md-6">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Características do Atendimento</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- radio -->
                      <label>Selecione Tipo de Atendimento</label>
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="TipoAtendimento">
                          <label class="form-check-label">Presencial</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="TipoAtendimento">
                          <label class="form-check-label">Telefone</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="TipoAtendimento">
                          <label class="form-check-label">Email</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      <!-- Horizontal Form -->
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Motivos do Atendimento</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal">
          <div class="card-body">
            <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="motivo1">
                  <label class="col-sm-2 form-check-label">Motivo1</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="motivo2">
                  <label class="col-sm-2 form-check-label">Motivo2</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="motivo3">
                  <label class="col-sm-2 form-check-label">Motivo3</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="motivo4">
                  <label class="col-sm-2 form-check-label">Motivo4</label>
                </div>
                <div class="form-check" id="divmotivo2">
                  <input class="form-check-input" type="checkbox" id="motivo5">
                  <label class="col-sm-2 form-check-label">Motivo5</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="motivo6">
                  <label class="col-sm-2 form-check-label">Motivo6</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="motivo7">
                  <label class="col-sm-2 form-check-label">Motivo7</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="motivo8">
                  <label class="col-sm-2 form-check-label">Motivo8</label>
                </div>
              </div>
            <div class="form-group row">
              <label for="inputoutros" class="col-sm-2 col-form-label">Outros</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputoutros" placeholder="Descreva brevemente o motivo">
              </div>
            </div>
            
          </div>

          <div class="col-md-6">
          <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Informação de Resolução</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form role="form">
            <!-- input states -->
              <div class="row">
                <div class="col-sm-8">
                    <label>Selecione opção para conclusão do Atendimento</label>
                    <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="TipoConclusao">
                          <label class="form-check-label">Atendimento Resolvido</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="TipoConclusao">
                          <label class="form-check-label">Atendimento Não Resolvido</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="TipoConclusao">
                            <label class="form-check-label">Atendimento Transferido</label>
                        </div>
                    </div>
                    <label>Realizou Atualização Cadastral</label>
                    <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="Att">
                          <label class="form-check-label">Sim</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="Att">
                          <label class="form-check-label">Não</label>
                        </div>           
                    </div> 
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Finalizar Atendimento</button>
          </div>
          <!-- /.card-footer -->
        </form>


      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @includeif('layouts.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{ asset ('AdminLTE/plugins/jquery/jquery.min.js') }} "></script>
<script type="text/javascript" src="{{ URL::asset('js/paginas/atendimento/atendimentoNovo.js') }}">  </script>
<!-- Bootstrap -->
<script src="{{ asset ('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ asset ('AdminLTE/dist/js/adminlte.js') }}"></script>

</body>
</html>