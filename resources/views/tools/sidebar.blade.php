<aside class="main-sidebar sidebar-dark-primary elevation-4">
<div>
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin/dist/img/pemko.png')}}" alt="pemko Logo" class="brand-image img-circle " style="opacity: .8">
      <span class="brand-text light1">Ekonomi Kreatif</span>
    </a>
</div>
<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu">
            <a href="{{url('berandaadmin')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li> 
          <li class="nav-header">USER</li>
          <li class="nav-item">
            <a href="{{url('datapelaku')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Pelaku
                <i class="fas fa-angle"></i>
              </p>
            </a>
          </li>
          @if(auth()->user()->pegawai_id=="1")
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p> 
                Master Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item1">
                <a href="{{url('sektorusaha')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis Sektor</p>
                </a>
              </li>
              <li class="nav-item1">
                <a href="{{url('pelatihan')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis Pelatihan</p>
                </a>
                <li class="nav-item1">
                <a href="{{url('kecamatan')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kecamatan</p>
                </a>
                <li class="nav-item1">
                <a href="{{url('kelurahan')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelurahan</p>
                </a>
            </ul>
          </li>
          
          <li class="nav-header">ADMIN</li>
          <li class="nav-item">
            <a href="{{url('dataadmin')}}" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p>
                Data Admin
                <i class="fas fa-angle"></i>
              </p>
            </a>
            @endif
            <li class="nav-item">
            <a href="{{url('pegawai')}}" class="nav-link">
              <i class="nav-icon fas fa-pen"></i>
              <p>
                Data Pegawai
                <i class="fas fa-angle"></i>
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>