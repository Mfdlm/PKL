<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pelatihan</title>
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
            <h1 class="m-0">Input Data Admin</h1>
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
              <form method="post" action="{{ url('simpanperubahan/'.$usr->id) }}">
              {{ csrf_field() }}
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pengguna</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Input Nama Pengguna" value="{{ $usr->name }}">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">NIP</label>
              <select type="text" name="pegawai_id" class="form-control" id="NIP" placeholder="NIP" required value="{{ $usr->nip }}">
               @foreach ($pegawai as $item)
               <option value="{{ $item->id }}" @if ($item->id == $usr->pegawai_id) selected @endif>{{ $item->nip }}</option>
                @endforeach
                    </select>
               </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Input Email" value="{{ $usr->email }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Input Password" value="{{ $usr->password }}">
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
