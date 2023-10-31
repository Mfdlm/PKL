<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-tie"></i> {{ auth()->user()->name }}
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href="{{ url('logout') }}" class="dropdown-item" onclick='return confirm("Apakah Anda Yakin Ingin Keluar")'>Log Out</a>
        </div>
      </li>
    </ul>
</nav>
