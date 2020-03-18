<!DOCTYPE html>
<html lang="pt-BR">

<?php 
$title = 'Intranet - Relatorio de Atendimentos';
?>

@includeif('layouts.head')

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    @includeif('layouts.header')
    <!-- Main Sidebar Container -->
    @section('sidebar')
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="painel" class="brand-link">
          <img src="{{ asset('AdminLTE/dist/img/logo500x100.jpg') }}" alt="CRABA Logo" class="brand-image elevation-3"
            style="opacity: .8">
          <span class="brand-text font-weight-light"><strong>CRA-BA</strong></span>
        </a>
      
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Roteiros de Atendimento
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Roteiro PF</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Roteiro PJ</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Não Registrado</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-phone"></i>
                  <p>
                    Telefones Uteis
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>
                    Prazos Importantes
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-hand-holding-usd"></i>
                  <p>
                    Valores das Taxas
                  </p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
    @endsection

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Intranet v1.0 - Relatorio de Atendimentos</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!--  Row das Noticias com Imagens (Render por ID com o link das imagens e conteudo) -->

      <div class="row">
        <div class="col-md-4">
          <!-- Box Comment -->
          <div class="form-group">
            <label>Motivos</label>
            <select class="select2" multiple="multiple" data-placeholder="Selecione o(s) Motivo(s)" style="width: 100%;">
              <option>Motivo 1</option>
              <option>Motivo 2</option>
              <option>Motivo 3</option>
              <option>Motivo 4</option>
              <option>Motivo 5</option>
              <option>Motivo 6</option>
              <option>Motivo 7</option>
            </select>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-4">
          <!-- Box Comment -->
          <div class="card card-widget">
            <div class="card-header">
              <div class="user-block">
                <a href="/" title="Acesse">Comunicação</a>
              </div>
              <!-- /.user-block -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                  <i class="far fa-circle"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <img class="img-fluid pad" src="{{ asset('AdminLTE/dist/img/photo1.png') }}" alt="Photo">
              <p>Resumo</p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
          <!-- Box Comment -->
          <div class="card card-widget">
            <div class="card-header">
              <div class="user-block">
                <a href="/" title="Acesse">Jurídico</a>
              </div>
              <!-- /.user-block -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                  <i class="far fa-circle"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <img class="img-fluid pad" src="{{ asset('AdminLTE/dist/img/photo1.png') }}" alt="Photo">
              <p>Resumo</p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
          <!-- Box Comment -->
          <div class="card card-widget">
            <div class="card-header">
              <div class="user-block">
                <a href="/" title="Click para ir">Acessoria</a>
              </div>
              <!-- /.user-block -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                  <i class="far fa-circle"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <img class="img-fluid pad" src="{{ asset('AdminLTE/dist/img/photo2.png') }}" alt="Photo">
              <p>Resumo</p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
          <!-- Box Comment -->
          <div class="card card-widget">
            <div class="card-header">
              <div class="user-block">
                <a href="/" title="Acesse">Recursos Humanos</a>
              </div>
              <!-- /.user-block -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                  <i class="far fa-circle"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <img class="img-fluid pad" src="{{ asset('AdminLTE/dist/img/photo2.png') }}" alt="Photo">
              <p>Área voltada para RH</p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
          <!-- Box Comment -->
          <div class="card card-widget">
            <div class="card-header">
              <div class="user-block">
                <a href="/" title="Acesse">Normas e Regras</a>
              </div>
              <!-- /.user-block -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                  <i class="far fa-circle"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <img class="img-fluid pad" src="{{ asset('AdminLTE/dist/img/photo2.png') }}" alt="Photo">
              <p>Acesso à normas, regras e regimento interno do CRA</p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- Main content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @includeif('layouts.footer')
  </div>
  <!-- ./wrapper -->

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