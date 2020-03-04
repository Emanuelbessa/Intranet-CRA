
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
      <form role="form">
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
                          <input class="form-check-input" type="radio" name="PFPJ" id="PF">
                          <label class="form-check-label">Pessoa Física</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="PFPJ" id="PJ">
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
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nome">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">CPF/CNPJ</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="CPF/CNPJ">
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
              <div class="form-check" id="motivo1">
                <input class="form-check-input" type="checkbox" >
                <label class="col-sm-10 form-check-label">Inscrição PJ</label>
              </div>
              <div class="form-check" id="motivo2">
                <input class="form-check-input" type="checkbox" >
                <label class="col-sm-10 form-check-label">Atualização Cadastro PJ</label>
              </div>
              <div class="form-check"  id="motivo3">
                <input class="form-check-input" type="checkbox">
                <label class="col-sm-10 form-check-label">Inclusão ou Substituição do Resp Técnico</label>
              </div>
              <div class="form-check" id="motivo4">
                <input class="form-check-input" type="checkbox" >
                <label class="col-sm-10 form-check-label">Atualização Resp Técnica</label>
              </div>
              <div class="form-check" id="motivo5">
                <input class="form-check-input" type="checkbox">
                <label class="col-sm-10 form-check-label">Confirmar recebimento de email enviando documentação ou solicitação</label>
              </div>
              <div class="form-check" id="motivo6">
                <input class="form-check-input" type="checkbox">
                <label class="col-sm-10 form-check-label">Dúvidas sobre atualização cadastro PJ  e Resp Técnico</label>
              </div>
              <div class="form-check" id="motivo7">
                <input class="form-check-input" type="checkbox">
                <label class="col-sm-10 form-check-label">Envio do Boleto de Taxa de Certidão de RCA, CAT e reg de atestado</label>
              </div>
              <div class="form-check" id="motivo8">
                <input class="form-check-input" type="checkbox">
                <label class="col-sm-10 form-check-label">Dificuldades ou problemas técnicos no site na emissão da Certidão de Registro e Regularidade ou emissão de boleto</label>
              </div>
              <div class="form-check" id="motivo9">
                <input class="form-check-input" type="checkbox">
                <label class="col-sm-10 form-check-label">Cancelamento de registro</label>
              </div>
              <div class="form-check" id="motivo10">
                <input class="form-check-input" type="checkbox">
                <label class="col-sm-10 form-check-label">Renegociação de débitos de anuidades</label>
              </div>
              <div class="form-check" id="motivo11">
                <input class="form-check-input" type="checkbox">
                <label class="col-sm-10 form-check-label">Dúvidas sobre serviços que a PJ explora e são sujeitos a fiscalização deste CRA</label>
              </div>
              <div class="form-check" id="motivo12">
                <input class="form-check-input" type="checkbox">
                <label class="col-sm-10 form-check-label">Querendo saber se o registo do seu atestado esta pronto</label>
              </div>
              <div class="form-check" id="motivo13">
                <input class="form-check-input" type="checkbox">
                <label class="col-sm-10 form-check-label">Querendo saber se sua CAT esta pronta</label>
              </div>
              <div class="form-check" id="motivo14">
                <input class="form-check-input" type="checkbox">
                <label class="col-sm-10 form-check-label">Querendo saber se a renovação de sua CAT ou Certidão de RCA esta pronta</label>
              </div>
              <div class="form-check" id="motivo15">
                <input class="form-check-input" type="checkbox">
                <label class="col-sm-10 form-check-label">Inscrição de PF</label>
              </div>
              <div class="form-check" id="motivo16">
                <input class="form-check-input" type="checkbox">
                <label class="col-sm-10 form-check-label">Saber se o CRA registra seu curso</label>
              </div>
              <div class="form-check" id="motivo17">
                <input class="form-check-input" type="checkbox">
                <label class="col-sm-10 form-check-label">Envio de Declaração de Regularidade</label>
              </div>
              <div class="form-check" id="motivo18">
                <input class="form-check-input" type="checkbox">
                <label class="col-sm-10 form-check-label">Atualização de endereço, telefone e email</label>
              </div>
              <div class="form-check" id="motivo19">
                <input class="form-check-input" type="checkbox">
                <label class="col-sm-10 form-check-label">Informações sobre cancelamento e licença de registro</label>
              </div>
              <div class="form-check" id="motivo20">
                <input class="form-check-input" type="checkbox">
                <label class="col-sm-10 form-check-label">Confirmação se o CRA recebeu seu email</label>
              </div>
              <div class="form-check" id="motivo21">
                <input class="form-check-input" type="checkbox">
                <label class="col-sm-10 form-check-label">Confirmação se o CRA recebeu sua documentação</label>
              </div>
              <div class="form-check" id="motivo22">
                <input class="form-check-input" type="checkbox">
                <label class="col-sm-10 form-check-label">Envio de boleto de taxa de cancelamento ou licença</label>
              </div>
              <div class="form-check" id="motivo23">
                <input class="form-check-input" type="checkbox">
                <label class="col-sm-10 form-check-label">Informações sobre pagamento e negociação de débito de anuidades</label>
              </div>
              <div class="form-check" id="motivo24">
                <input class="form-check-input" type="checkbox">
                <label class="col-sm-10 form-check-label">Querendo saber sobre o andamento de sua solicitação de cancelamento ou licença</label>
              </div>
              <div class="form-check" id="motivo25">
                <input class="form-check-input" type="checkbox">
                <label class="col-sm-10 form-check-label">Querendo saber se o registro do seu atestado esta pronto</label>
              </div>
              <div class="form-check" id="motivo26">
                <input class="form-check-input" type="checkbox">
                <label class="col-sm-10 form-check-label">Querendo saber se sua CAT esta pronta</label>
              </div>
              <div class="form-check" id="motivo27">
                <input class="form-check-input" type="checkbox">
                <label class="col-sm-10 form-check-label">Querendo saber se a renovação de sua CAT ou Certidão de RCA esta pronto</label>
              </div>

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
          </div>
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