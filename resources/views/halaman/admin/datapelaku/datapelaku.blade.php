<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Pelaku Subsektor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @include('tools.head')
</head>
<style>
  .open-modal-btn {
    padding: 5px 10px;
    color: white;
    border-radius: 5px;
  }
</style>
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
        <h1 class="m-0">Halaman Data Pelaku Subsektor</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        </ol>
      </div>
    </div>
    <!-- Tambahkan input pencarian di sini -->
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="input-group">
          <input type="text" id="searchInput" class="form-control" placeholder="Cari data...">
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              @if(auth()->user()->pegawai_id=="1")
                <a href="{{ url('cetak') }}" class="btn btn-primary btn-user btn-md">
                  <i class="fa fa"></i>Cetak
                </a>
                <a href="{{ url('tambahpelaku') }}" class="btn btn-primary btn-user btn-md">
                  <i class="fa fa"></i>Tambah
                </a>
              @endif
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th class="text-center">NIK</th>
                      <th class="text-center">Nama</th>
                      <th class="text-center">Nama Usaha</th>
                      <th class="text-center">No Telepon</th>
                      <th class="text-center">Sektor Usaha</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  @php $no = 1; @endphp
                  @foreach ($form as $item)
                  <tr data-search="{{ $item->nik }} {{ $item->name }} {{ $item->nama_usaha }} {{ $item->no_hp }} {{ $item->sektorusaha->sektor_usaha }} {{ $item->jenis_kelamin }} {{ $item->alamat_usaha }}">
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->nama_usaha }}</td>
                    <td>{{ $item->no_hp }}</td>
                    <td>{{ $item->sektorusaha->sektor_usaha }}</td>
                    <td width="225px">
                    @if(auth()->user()->pegawai_id=="1")
                      <a href="{{ url('edit/'.$item->id) }}" class="btn btn-warning btn-sm">Ubah</a> |
                      <a href="{{ url('hapusdata/'.$item->id) }}" class="btn btn-danger btn-sm" onclick='return confirm("Apakah Anda Yakin Ingin Menghapus Data?")'>Hapus</a> |
                      @endif
                      <button type="button" class="btn btn-primary btn-sm open-modal-btn" data-toggle="modal" data-target="#data{{$loop->iteration}}">Lihat</button>
                    </td>
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
    @foreach ($form as $item)
    <div class="modal fade" id="data{{$loop->iteration}}" role="dialog">
      <div class="modal-dialog modal-dialog-centered">
        <!-- Modal content-->
        <div class="modal-content modal-lg">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h5 class="modal-title"></h5>
          </div>
          <div style="text-align: center;">
            <h5 class="modal-title">Detail Data Pelaku Subsektor</h5>
          </div>
          <div class="modal-body">
            <p><strong>NIK</strong>: {{ $item->nik }}</p>
            <p><strong>Nama</strong>: {{ $item->name }}</p>
            <p><strong>Nama Usaha</strong>: {{ $item->nama_usaha }}</p>
            <p><strong>Jenis Kelamin</strong>: {{ $item->jenis_kelamin }}</p>
            <p><strong>Alamat</strong>: {{ $item->alamat_usaha }}</p>
            <p><strong>Kecamatan</strong>: {{ $item->kecamatan->kecamatan }}</p>
            <p><strong>Kelurahan</strong>: {{ $item->kelurahan->kelurahan }}</p>
            <p><strong>No Telepon</strong>: {{ $item->no_hp }}</p>
            <p><strong>Jenis Pelatihan (WUB)</strong>: {{ $item->jenispelatihan->jenis_pelatihan }}</p>
            <p><strong>Nama Kelompok (WUB)</strong>: {{ $item->nama_Kel }}</p>
            <p><strong>Tahun Pelatihan (WUB)</strong>: {{ $item->thn_pelatihan }}</p>
            <p><strong>SKPD Pengampu</strong>: {{ $item->skpdpengampu->skpd_pengampu }}</p>
            <p><strong>Sektor Usaha</strong>: {{ $item->sektorusaha->sektor_usaha }}</p>
            <p><strong>Pelatihan Yang Pernah Diikuti</strong>: {{ $item->plth_yg_prnh_ikut }}</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    @endforeach
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
<script>
  $(document).ready(function () {
    // Memantau perubahan pada input pencarian
    $('#searchInput').on('input', function () {
      var keyword = $(this).val().toLowerCase();
      $('.table tbody tr').each(function () {
        var rowData = $(this).data('search').toLowerCase();
        if (rowData.includes(keyword)) {
          $(this).show();
        } else {
          $(this).hide();
        }
      });
    });
    // Listen for the "Open Modal" button click
    $('.open-modal-btn').click(function () {
      // Get the modal ID from the data-target attribute
      var modalId = $(this).data('target');
      // Show the modal
      $(modalId).modal('show');
    });
  });
</script>
</body>
</html>
