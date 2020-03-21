<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="painel" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Relatório - Fiscalização</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Relatório - Financeiro</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Relatório - Administrativo</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contato</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fas fa-cogs"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">Menu de Configurações</span>
        <div class="dropdown-divider"></div>
        <a href="{{ route('register') }}" class="dropdown-item">
          <i class="fas fa-user-plus mr-2"></i> Adicionar Usuário
        </a>
        <div class="dropdown-divider"></div>
        @php

        $obj = [];
        $user = Auth::user();
        $iduser = $user->id;
        $roles = DB::table('user_role')->where('user_id', $iduser)->get();

        foreach ($roles as $role) {
        array_push($obj, $role->role_id);
        }
        @endphp
        @if(in_array("1", $obj))
        <a href="{{ route('admin') }}" class="dropdown-item">
          <i class="fas fa-user-cog mr-2"></i> Gerenciamento Interno
        </a>
        @endif
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
<!-- /.navbar -->