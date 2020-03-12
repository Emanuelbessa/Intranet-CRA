<?php
$title = 'Intranet - Admin';
?>

<!DOCTYPE html>
<html lang="pt-BR">


<?php 
$title = 'Intranet - Home';
?>

@includeif('layouts.head')

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    @includeif('layouts.header')
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Quadro de Usuários Cadastrados</h3>

            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar">

                <div class="input-group-append">
                  <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Sobrenome</th>
                  <th>E-Mail</th>
                  <th>Administrador</th>
                  <th>Gestor</th>
                  <th>Fiscal</th>
                  <th>Comunicação</th>
                  <th>Financeiro</th>
                  <th>RH</th>
                  <th>Atendente</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <form action="{{ route('admin.assign') }}" method="post">
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }} <input type="hidden" name="email" value="{{ $user->email }}"></td>
                    <td><input type="checkbox" {{ $user->hasRole('Administrador') ? 'checked' : '' }} name="role_admin">
                    </td>
                    <td><input type="checkbox" {{ $user->hasRole('Gestor') ? 'checked' : '' }} name="role_gestor"></td>
                    <td><input type="checkbox" {{ $user->hasRole('Fiscal') ? 'checked' : '' }} name="role_fiscal"></td>
                    <td><input type="checkbox" {{ $user->hasRole('Comunicacao') ? 'checked' : '' }}
                        name="role_comunicacao"></td>
                    <td><input type="checkbox" {{ $user->hasRole('Financeiro') ? 'checked' : '' }}
                        name="role_financeiro"></td>
                    <td><input type="checkbox" {{ $user->hasRole('RH') ? 'checked' : '' }} name="role_rh"></td>
                    <td><input type="checkbox" {{ $user->hasRole('Atendente') ? 'checked' : '' }} name="role_atendente">
                    </td>
                    {{ csrf_field() }}
                    <td><button type="submit">Fazer Alterações</button></td>
                  </form>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>

    <!-- /.content -->
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