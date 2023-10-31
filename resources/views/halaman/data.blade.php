  <!DOCTYPE html>
  <html lang="en">

  <head>
  <title>Data</title>
  @include('tools.user.head')
   <!-- ... kode lainnya ... -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#search').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('#example2 tbody tr').filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
  <style>
    #search {
      padding: 10px;
      width: 50%;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 10px;
    }
  </style>
  </head>

  <body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
          <h1 class="text-light"><a href="{{ url('/') }}">
          <a href="{{ url('/') }}"><img src="{{asset('user/assets/img/pemko.png')}}" alt="pemko logo" class="img-fluid"></a><span>Ekonomi Kreatif</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{url('formulir')}}">Formulir</a></li>
            <li><a href="{{ url('data') }}">Data</a></li>
            <li><a href="{{ url('login') }}">Login Admin</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header><!-- End Header -->
    <main id="main">

      <!-- ======= Contact Section ======= -->
      <section class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2>Data Pelaku Sektor</h2>
            <ol>
              <li><a href="{{ url('/') }}">Home</a></li>
              <li>Data</li>
            </ol>
          </div>

        </div>
      </section><!-- End Contact Section -->

      <!-- ======= Contact Section ======= -->
      <section class="content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                <div class="card-body">
                <input type="text" id="search" placeholder="Cari berdasarkan nama">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama Usaha</th>
                    <th>Sektor Usaha</th>
                    </tr>
                    </thead>
                    @php $no = 1; @endphp
                    @foreach ($form as $item)
                    <tr>
                    <td width="10px">{{ $no++ }}</td>
                    <td>{{ $item->nama_usaha }}</td> 
                    <td>{{ $item->sektorusaha->sektor_usaha }}</td>
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
      </section><!-- End Contact Section -->

      <!-- ======= Map Section ======= -->
      @include('tools.user.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    @include('tools.user.script')

  </body>

  </html>