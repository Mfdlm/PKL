<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Data</title>
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
              <form method="post" action="{{ url('simpandata/'.$varUsr->id) }}">
              {{ csrf_field() }}
              <div class="card-body">
                  <div class="form-group">
                    <la>NIK</label>
                    <input type="text" name="nik" class="form-control" id="exampleInputEmail1" placeholder="NIK" value="{{ $varUsr->nik }}">
                  </div>
                  <div class="form-group">
                    <label>Nama (Sesuai KTP)</label>
                    <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Nama" value="{{ $varUsr->name }}">
                  </div>
                  <div class="form-group">
                    <label>Nama Usaha</label>
                    <input type="text" name="nama_usaha" class="form-control" id="exampleInputPassword1" placeholder="Nama Usaha" value="{{ $varUsr->nama_usaha }}">
                  </div>
                  <label>Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" class="form-control" id="exampleInputPassword1" placeholder="Input Jenis Kelamin" value="{{ $varUsr->jenis_kelamin }}">
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat_usaha" class="form-control" id="exampleInputPassword1" placeholder="Alamat Usaha" value="{{ $varUsr->alamat_usaha }}">
                  </div>
                  <div class="form-group">
                  <label>Kecamatan</label>
                    <select type="text" name="kecamatan_id" class="form-control" id="exampleInputPassword1" placeholder="Kecamatan">
                    <option value="{{$varUsr->kecamatan_id}}"disabled selected>Pilih Kecamatan</option>
                                      @foreach ($kec as $item)
                                      <option value="{{ $item->id }}" @if ($item->id == $varUsr->kecamatan_id) selected @endif>{{ $item->kecamatan }}</option>
                                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                  <label>Kelurahan</label>
                    <select type="text" name="kelurahan_id" class="form-control" id="exampleInputPassword1" placeholder="Kelurahan">
                    <option value="{{$varUsr->kecamatan_id}}"disabled selected>Pilih Kelurahan</option>
                                      @foreach ($kel as $item)
                                      <option value="{{ $item->id }}" @if ($item->id == $varUsr->kelurahan_id) selected @endif>{{ $item->kelurahan }}</option>
                                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>No Telepon</label>
                    <input type="text" name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="Nomor Telepon" value="{{ $varUsr->no_hp }}">
                  </div>
                  <div class="form-group">
                  <label>Jenis Pelatihan (WUB)</label>
                    <select type="text" name="jenispelatihan_id" class="form-control" id="exampleInputPassword1" placeholder="Jenis Pelatihan">
                    <option value="{{$varUsr->jenispelatihan_id}}"disabled selected>Pilih Jenis Pelatihan</option>
                                      @foreach ($plth as $item)
                                      <option value="{{ $item->id }}" @if ($item->id == $varUsr->jenispelatihan_id) selected @endif>{{ $item->jenis_pelatihan }}</option>
                                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Nama Kelompok (WUB)</label>
                    <input type="text" name="nama_Kel" class="form-control" id="exampleInputPassword1" placeholder="Nama Kelompok" value="{{ $varUsr->nama_Kel }}">
                  </div>
                  <div class="form-group">
                    <label>Tahun Pelatihan (WUB)</label>
                    <input type="text" name="thn_pelatihan" class="form-control" id="exampleInputPassword1" placeholder="Tahun Pelatihan" value="{{ $varUsr->thn_pelatihan }}">
                  </div>
                  <div class="form-group">
                    <label>SKPD Pengampu</label>
                    <select type="text" name="skpdpengampu_id" class="form-control" id="exampleInputPassword1" placeholder="SKPD Pengampu" value="{{$varUsr->skpdpegampu_id}}">
                                      @foreach ($skpd as $item)
                                        <option value="{{ $item->id }}">{{ $item->skpd_pengampu }}</option>
                                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Sektor Usaha</label>
                    <select type="text" name="sektorusaha_id" class="form-control" id="exampleInputPassword1" placeholder="Sektor Usaha">
                    <option value="{{$varUsr->sektorusaha_id}}" disabled selected>Pilih Sektor Usaha</option>
                                    @foreach ($sekt as $item)
                                    <option value="{{ $item->id }}" @if ($item->id == $varUsr->sektorusaha_id) selected @endif>{{ $item->sektor_usaha }}</option>
                                    @endforeach
                    </select>
                  </div> 
                  <div class="form-group">
                    <label>Pelatihan Yang Pernah Diikuti</label>
                    <input type="text" name="plth_yg_prnh_ikut" class="form-control" id="exampleInputPassword1" placeholder="Pelatihan Yang Pernah Diikuti" value="{{ $varUsr->plth_yg_prnh_ikut }}">
                  </div>
                </div>
                <!-- /.card-body -->
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
</body>
</html>
