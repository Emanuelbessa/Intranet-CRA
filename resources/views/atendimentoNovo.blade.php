
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
  
</head>
<body class="hold-transition sidebar-mini" onload="esconder()">
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
            <li class="breadcrumb-item"><a href="{{url('atendimento')}}">Atendimento</a></li>
              <li class="breadcrumb-item active">Novo Atendimento</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      @csrf
      <div class="row">
        <div class="col-md-6">
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">Situação do Registro</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">      
                <div class="col-sm-6">
                    <!-- radio -->
                    <label>Marque se registrado ou não</label>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="TipoRegistro" id="registrado" value="1">
                        <label class="form-check-label">Registrado</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="TipoRegistro" id="naoregistrado" value="2">
                        <label class="form-check-label">Não Registrado</label>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">Selecione Pessoa Física ou Pessoa Jurídica</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                    <label>Selecione PF ou PJ</label>
                    <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="PFPJ" id="PF" value="1">
                          <label class="form-check-label">Pessoa Física</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="PFPJ" id="PJ" value="2">
                          <label class="form-check-label">Pessoa Jurídica</label>
                        </div>
                    </div> 
                </div>
              </div>
          </div>
        </div>
      </div>

        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Informações</h3>
            </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nome/Nome Fantasia</label>
                  <input type="text" class="form-control" id="nomeprincipal" placeholder="Nome" name="nomeprincipal">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">CPF/CNPJ</label>
                  <input type="text" class="form-control" id="cpfcnpjprincipal" placeholder="CPF/CNPJ" name="cpfcnpjprincipal">
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="representante">
                  <label class="col-sm-10 form-check-label">Representante</label>
                </div>
                <div class="form-group" id="nomerepresentante">
                  <label for="exampleInputEmail1">Nome do Representante</label>
                  <input type="text" class="form-control" id="nomerepresentante" placeholder="Nome" name="nomerepresentante">
                </div>
                <div class="form-group" id="cpfrepresentante">
                  <label for="exampleInputPassword1">CPF do Representante</label>
                  <input type="text" class="form-control" id="cpfcnpjrepresentante" placeholder="CPF/CNPJ" name="cpfcnpjrepresentante">
                </div>
              </div>
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <!-- general form elements disabled -->
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">Características do Atendimento</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                  <div class="col-sm-6">
                    <!-- radio -->
                    <label>Selecione Tipo de Atendimento</label>
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="TipoAtendimento" value="1">
                        <label class="form-check-label">Presencial</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="TipoAtendimento" value="2">
                        <label class="form-check-label">Telefone</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="TipoAtendimento" value="3">
                        <label class="form-check-label">Outros</label>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
      <!-- Horizontal Form -->
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Motivos do Atendimento</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="card-body">
          <div class="form-group">
              
            @includeif('MotivosAtendimento')

          </div>
          <div class="form-group row">
            <label for="inputoutros" class="col-sm-2 col-form-label">Outros</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="outros" placeholder="Descreva brevemente o motivo">
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
            <!-- input states -->
              <div class="row">
                <div class="col-sm-8">
                    <label>Selecione opção para conclusão do Atendimento</label>
                    <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="TipoConclusao" value="1">
                          <label class="form-check-label">Atendimento Resolvido</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="TipoConclusao" value="2">
                          <label class="form-check-label">Atendimento Não Resolvido</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="TipoConclusao" value="3">
                            <label class="form-check-label">Atendimento Transferido</label>
                        </div>
                    </div>
                    <label>Realizou Atualização Cadastral</label>
                    <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="Att" value="Sim">
                          <label class="form-check-label">Sim</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="Att" value="Nao">
                          <label class="form-check-label">Não</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="Att" value="Nao se aplica">
                          <label class="form-check-label">Não se Aplica</label>
                        </div>          
                    </div> 
                </div>
              </div>
          </div>
        </div>
    </div>
  </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-primary" id="enviar">Finalizar Atendimento</button>
          </div>
          <!-- /.card-footer -->
        
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