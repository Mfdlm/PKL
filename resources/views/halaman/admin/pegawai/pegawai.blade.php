<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jenis Pelatihan</title>
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
            <h1 class="m-0">Halaman Data Pegawai</h1>
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
              <td>
              @if(auth()->user()->pegawai_id=="1")
                         <a href="{{url('tambahpegawai') }}" class="btn btn-primary btn-user btn-md">
                          <i class="fa fa"></i>Tambah</a></td>
                          @endif
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>No Telepon</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    @if(auth()->user()->pegawai_id=="1")
                    <th>Aksi</th>
                    @endif
                  </tr>
                  </thead>
                  @php $no = 1; @endphp
                  @foreach ($pegawai as $item)
                  <tr>
                    <td width="10px">{{ $no++ }}</td>
                    <td>{{ $item->nip }}</td>
                    <td width="150px">{{ $item->nama }}</td>
                    <td>{{ $item->tgl_lahir }}</td>
                    <td>{{ $item->no_telepon }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td width="200px">{{ $item->alamat }}</td>
                    @if(auth()->user()->pegawai_id=="1")
                    <td width="210px">
                         <a href="{{ url('hapuspegawai/'.$item->id) }}" class="btn btn-danger btn-sm" onclick='return confirm("Apakah Anda Yakin Ingin Menghapus Data?")'> Hapus</a>|<a  href="{{ url('editpegawai/'.$item->id) }}" class="btn btn-warning btn-sm" >Ubah</a>
                        </td>
                    @endif
                  </tr>
                  @endforeach
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
