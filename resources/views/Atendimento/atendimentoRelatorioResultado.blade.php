<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Intranet - Cra-BA</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Datatables Buttons -->
  <link rel="stylesheet"
    href="{{ asset('AdminLTE/plugins/datatable-export/Buttons-1.6.1/css/buttons.dataTables.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
@php
$usuario = Auth::user();
@endphp

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    @includeif('layouts.header')

    <!-- Main Sidebar Container -->
    @includeif('layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>DataTables</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">DataTables</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="TabelaResultado" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>Motivo</th>
                      <th>PF/PJ</th>
                      <th>Modalidade de Atendimento</th>
                      <th>Registrado?</th>
                      <th>Atendente</th>
                      <th>Data</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($AtendimentosFiltrados as $atendimentos)
                    <tr>
                      <td>{{$atendimentos->Nome_Atendido}}</td>
                      <td>{{$atendimentos->Nome_Motivo}}</td>
                      <td>{{$atendimentos->Nome_Tipo_PFPJ}}</td>
                      <td>{{$atendimentos->Nome_Tipo_Atendimento}}</td>
                      <td>{{$atendimentos->Nome_Tipo_Registro}}</td>
                      <td>{{$atendimentos->first_name}}</td>
                      <td>{{$atendimentos->created_at}}</td>
                    </tr>
                    @endforeach
                  <tfoot>
                    <tr>
                      <th>Nome</th>
                      <th>Motivo</th>
                      <th>PF/PJ</th>
                      <th>Modalidade de Atendimento</th>
                      <th>Registrado?</th>
                      <th>Atendente</th>
                      <th>Data</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
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
  <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- DataTables -->
  <script src="{{ asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>
  <!-- Export Scripts -->
  <script src="{{ asset('AdminLTE/plugins/datatable-export/Buttons-1.6.1/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('AdminLTE/plugins/datatable-export/JSZip-2.5.0/jszip.min.js') }}"></script>
  <script src="{{ asset('AdminLTE/plugins/datatable-export/pdfmake-0.1.36/pdfmake.min.js') }}"></script>
  <script src="{{ asset('AdminLTE/plugins/datatable-export/pdfmake-0.1.36/vfs_fonts.js') }}"></script>
  <script src="{{ asset('AdminLTE/plugins/datatable-export/Buttons-1.6.1/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('AdminLTE/plugins/datatable-export/Buttons-1.6.1/js/buttons.print.min.js') }}"></script>
  <!-- page script -->
  <script>
    var data = new Date();
var teste = {!! json_encode($usuario -> first_name)!!};
$(function () {
    $("#TabelaResultado").DataTable({
        "responsive": true,
        "autoWidth": false,
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'pdf',
                text: 'Salvar em PDF',
                title: 'Relatorio de Atendimento ' + data.getDate() + '-' + (data.getMonth() + 1) + '-' + data.getFullYear(),
                filename: 'Relatorio Atendimento ' + data.getDate() + '-' + (data.getMonth() + 1) + '-' + data.getFullYear(),
                messageTop: 'Relatório gerado por ' + {!! json_encode($usuario-> first_name)!!} + ' ' + {!! json_encode($usuario -> last_name)!!} + ' na data ' + data.getDate() + '-' + (data.getMonth() + 1) + '-' + data.getFullYear() + ' ás ' + data.getHours() + ':' + data.getMinutes(),
    exportOptions: {
    modifier: {
        page: 'current'
    }
}
        },
    {
        extend: 'excel',
        text: 'Salvar em Excel',
        title: 'Relatorio Atendimento' + ' ' + data.getDate() + '-' + (data.getMonth() + 1) + '-' + data.getFullYear(),
        filename: 'Relatorio Atendimento' + ' ' + data.getDate() + '-' + (data.getMonth() + 1) + '-' + data.getFullYear(),
        exportOptions: {
            modifier: {
                page: 'current'
            }
        }
    },
    {
        extend: 'print',
        text: 'Imprimir',
        messageTop: 'Relatório gerado por ' + {!! json_encode($usuario-> first_name)!!} + ' ' + {!! json_encode($usuario -> last_name)!!} + ' na data ' + data.getDate() + '-' + (data.getMonth() + 1) + '-' + data.getFullYear() + ' ás ' + data.getHours() + ':' + data.getMinutes(),
        title: 'Relatorio Atendimento' + ' ' + data.getDate() + '-' + (data.getMonth() + 1) + '-' + data.getFullYear(),
        filename: 'Relatorio Atendimento' + ' ' + data.getDate() + '-' + (data.getMonth() + 1) + '-' + data.getFullYear(),
        exportOptions: {
            modifier: {
                page: 'current'
            }
        }
    },
    {
        extend: 'copy',
        text: 'Copiar Tabela',
        title: 'Relatorio Atendimento' + ' ' + data.getDate() + '-' + (data.getMonth() + 1) + '-' + data.getFullYear(),
        filename: 'Relatorio Atendimento' + ' ' + data.getDate() + '-' + (data.getMonth() + 1) + '-' + data.getFullYear(),
        exportOptions: {
            modifier: {
                page: 'current'
            }
        }
    },
    {
        extend: 'csv',
        text: 'Salvar em CSV',
        title: 'Relatorio Atendimento' + ' ' + data.getDate() + '-' + (data.getMonth() + 1) + '-' + data.getFullYear(),
        filename: 'Relatorio Atendimento' + ' ' + data.getDate() + '-' + (data.getMonth() + 1) + '-' + data.getFullYear(),
        exportOptions: {
            modifier: {
                page: 'current'
            }
        }
    },
        ]
        
    });
  });
  </script>
</body>

</html>