<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Admin</title>
  @include('tools.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('tools.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  

    <!-- Sidebar -->
    @include('tools.sidebar')
    <!-- /.sidebar -->
  </aside>

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Halaman Data Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <a href="{{url('tambahadmin') }}" class="btn btn-primary btn-user btn-md">
                          <i class="fa fa"></i>Tambah</a></td>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>NIP</th>
                  <th>Email</th>
                  <th>Aksi</th>
                  </tr>
                  </thead>
                    @php $no = 1; @endphp
                     @foreach ($usr as $item)
                    <tr>
                    <td width="10px">{{ $no++ }}</td>
                    <td> {{ $item->name }} </td>
                    <td>{{ $item->pegawai->nip }}</td>
                    <td>{{ $item->email }}</td>
                    <td> <a href="{{ url('editadmin/'.$item->id) }}" class="btn btn-warning btn-sm">Ubah</a> | <a href="{{ url('hapusdataadmin/'.$item->id) }}"class="btn btn-danger btn-sm" onclick='return confirm("Apakah Anda Yakin Ingin Menghapus Data?")'>Hapus</a> </td>
                    </tr>
                   @endforeach
                  </tr>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('tools.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('tools.script')
</body>
</html>
