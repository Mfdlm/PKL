<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard admin</title>
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
  <div class="row">
    <div class="col-md-6">
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>{{$data}}</h3>
          <p>Data Pelaku Subsektor</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="{{url('datapelaku')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-md-6">
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{$pegawai}}</h3>
          <p>Pegawai</p>
        </div>
        <div class="icon">
          <i class="fas fa-user-tie"></i>
        </div>
        <a href="{{url('pegawai')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$kuliner}}</h3>
          <p>Kuliner</p>
        </div>
        <div class="icon">
          <i class="fas fa-utensils"></i>
        </div>
        <a href="{{url('datapelaku')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$fashion}}</h3>
          <p>Fashion</p>
        </div>
        <div class="icon">
          <i class="fas fa-shirt"></i>
        </div>
        <a href="{{url('datapelaku')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$kriya}}</h3>
          <p>Kriya</p>
        </div>
        <div class="icon">
          <i class="fas fa-hand"></i>
        </div>
        <a href="{{url('datapelaku')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$musik}}</h3>
          <p>Musik</p>
        </div>
        <div class="icon">
          <i class="fas fa-music"></i>
        </div>
        <a href="{{url('datapelaku')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$despro}}</h3>
          <p>Desain Produk</p>
        </div>
        <div class="icon">
          <i class="fas fa-wand-magic-sparkles"></i>
        </div>
        <a href="{{url('datapelaku')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$pengper}}</h3>
          <p>Pengembangan Permainan</p>
        </div>
        <div class="icon">
          <i class="fas fa-gamepad"></i>
        </div>
        <a href="{{url('datapelaku')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$desin}}</h3>
          <p>Desain Interior</p>
        </div>
        <div class="icon">
          <i class="fas fa-laptop"></i>
        </div>
        <a href="{{url('datapelaku')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$senrup}}</h3>
          <p>Seni Rupa</p>
        </div>
        <div class="icon">
          <i class="fas fa-hands"></i>
        </div>
        <a href="{{url('datapelaku')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$fav}}</h3>
          <p>Film,Animasi,Video</p>
        </div>
        <div class="icon">
          <i class="fas fa-film"></i>
        </div>
        <a href="{{url('datapelaku')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$fotgraf}}</h3>
          <p>Fotografi</p>
        </div>
        <div class="icon">
          <i class="fas fa-camera-retro"></i>
        </div>
        <a href="{{url('datapelaku')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$deskom}}</h3>
          <p>Desain Komunitas Visual</p>
        </div>
        <div class="icon">
          <i class="fas fa-users"></i>
        </div>
        <a href="{{url('datapelaku')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$tv}}</h3>
          <p>Telivisi Dan Radio</p>
        </div>
        <div class="icon">
          <i class="fas fa-radio"></i>
        </div>
        <a href="{{url('datapelaku')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$arsi}}</h3>
          <p>Arsitektur</p>
        </div>
        <div class="icon">
          <i class="fas fa-city"></i>
        </div>
        <a href="{{url('datapelaku')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$iklan}}</h3>
          <p>Periklanan</p>
        </div>
        <div class="icon">
          <i class="fas fa-desktop"></i>
        </div>
        <a href="{{url('datapelaku')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$senper}}</h3>
          <p>Seni Pertunjukan</p>
        </div>
        <div class="icon">
          <i class="fas fa-users-viewfinder"></i>
        </div>
        <a href="{{url('datapelaku')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$terbit}}</h3>
          <p>Penerbitan</p>
        </div>
        <div class="icon">
          <i class="fas fa-pen-nib"></i>
        </div>
        <a href="{{url('datapelaku')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$apk}}</h3>
          <p>Aplikasi</p>
        </div>
        <div class="icon">
          <i class="fas fa-globe"></i>
        </div>
        <a href="{{url('datapelaku')}}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
</div>
  </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">

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
