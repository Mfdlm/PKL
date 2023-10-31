<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Pelaku Subsektor</title>
  @include('tools.head')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <!-- Or for RTL support -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />
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
            <h1 class="m-0">Input Data Pelaku Subsektor</h1>
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
          <!-- left column -->
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{ url('simpanpelaku') }}">
              {{ csrf_field() }}
              <div class="card-body">
                  <div class="form-group">
                    <label>NIK</label>
                    <input type="text" name="nik" class="form-control" id="exampleInputEmail1" placeholder="NIK">
                  </div>
                  <div class="form-group">
                    <label>Nama (Sesuai KTP)</label>
                    <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Nama">
                  </div>
                  <div class="form-group">
                    <label>Nama Usaha</label>
                    <input type="text" name="nama_usaha" class="form-control" id="exampleInputPassword1" placeholder="Nama Usaha" >
                  </div>
                  <div class="form-group mt-3">
                <label>Jenis Kelamin:</label>
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="jenis_kelamin" value= Laki-laki id= laki-laki>
                    <label class="form-check-label" for=laki-laki>Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="jenis_kelamin" value= Perempuan id="perempuan">
                    <label class="form-check-label" for=perempuan>Perempuan</label>
                </div>
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat_usaha" class="form-control" id="exampleInputPassword1" placeholder="Alamat Usaha">
                  </div>
                  <div class="form-group">
                  <label>Kecamatan</label>
                  <select name="kecamatan_id"class="form-select single-select-field" data-placeholder="Pilih Kecamatan">
                        <option></option>
                        @foreach ($kec as $item)
                            <option value="{{ $item->id }}">{{ $item->kecamatan }}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                  <label>Kelurahan</label>
                  <select name="kelurahan_id"class="form-select single-select-field" data-placeholder="Pilih Kelurahan">
                        <option></option>
                        @foreach ($kel as $item)
                            <option value="{{ $item->id }}">{{ $item->kelurahan }}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>No Telepon</label>
                    <input type="text" name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="Nomor Telepon">
                  </div>
                  <div class="form-group">
                  <label>Jenis Pelatihan (WUB)</label>
                  <select name="jenispelatihan_id"class="form-select single-select-field" data-placeholder="Pilih Jenis Pelatihan">
                        <option></option>
                        @foreach ($plth as $item)
                            <option value="{{ $item->id }}">{{ $item->jenis_pelatihan }}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Nama Kelompok (WUB)</label>
                    <input type="text" name="nama_Kel" class="form-control" id="exampleInputPassword1" placeholder="Nama Kelompok">
                  </div>
                  <div class="form-group">
                    <label>Tahun Pelatihan (WUB)</label>
                    <input type="text" name="thn_pelatihan" class="form-control" id="exampleInputPassword1" placeholder="Tahun Pelatihan">
                  </div>
                  <div class="form-group">
                    <label>SKPD Pengampu</label>
                    <select type="text" name="skpdpengampu_id" class="form-control" id="exampleInputPassword1" placeholder="SKPD Pengampu">
                                      @foreach ($skpd as $item)
                                        <option value="{{ $item->id }}">{{ $item->skpd_pengampu }}</option>
                                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Sektor Usaha</label>
                    <select name="sektorusaha_id"class="form-select single-select-field" data-placeholder="Pilih Jenis Sektor">
                        <option></option>
                        @foreach ($sekt as $item)
                            <option value="{{ $item->id }}">{{ $item->sektor_usaha}}</option>
                        @endforeach
                    </select>
                  </div> 
                  <div class="form-group">
                    <label>Pelatihan Yang Pernah Diikuti</label>
                    <input type="text" name="plth_yg_prnh_ikut" class="form-control" id="exampleInputPassword1" placeholder="Pelatihan Yang Pernah Diikuti">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
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
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $('.single-select-field').select2({
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
        });
    </script>
</body>
</html>
