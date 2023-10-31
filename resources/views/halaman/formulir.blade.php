<!DOCTYPE html>
<html lang="en">

<head>
<title>Formulir</title>
@include('tools.user.head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <!-- Or for RTL support -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />
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
          <h2>Formulir</h2>
          <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Formulir</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">
          <div class="col-lg-15">
          <form method="post" action="{{ url('kirim') }}">
            {{ csrf_field() }}
              <div>
                <div class="form-group mt-3">
                  <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK" required>
                </div>
             </div>
             <div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Nama" required>
                </div>
              </div>
              <div class="form-group mt-3">
              <input type="text" name="nama_usaha" class="form-control" id="nama_usaha" placeholder="Nama Usaha"  required>
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
              <div class="form-group mt-3">
                <input class="form-control" name="alamat_usaha" rows="5" placeholder="Alamat" required>
              </div>
              <div class="form-group mt-3">
                    <select name="kecamatan_id"class="form-select single-select-field" data-placeholder="Pilih Kecamatan">
                        <option></option>
                        @foreach ($kec as $item)
                            <option value="{{ $item->id }}">{{ $item->kecamatan }}</option>
                        @endforeach
                    </select>
                    </div>
                <div class="form-group mt-3">
                    <select name="kelurahan_id"class="form-select single-select-field" data-placeholder="Pilih Kelurahan">
                        <option></option>
                        @foreach ($kel as $item)
                            <option value="{{ $item->id }}">{{ $item->kelurahan }}</option>
                        @endforeach
                    </select>
                    </div>
              <div class="form-group mt-3">
                    <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="Nomor Telepon" required>
                  </div>
              <div class="form-group mt-3">
                    <select name="jenispelatihan_id"class="form-select single-select-field" data-placeholder="Pilih Jenis Pelatihan">
                        <option></option>
                        @foreach ($plth as $item)
                            <option value="{{ $item->id }}">{{ $item->jenis_pelatihan }}</option>
                        @endforeach
                    </select>
                    </div>
              <div class="form-group mt-3">
                    <input type="text" name="nama_Kel" class="form-control" id="nama_Kel" placeholder="Nama Kelompok" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" name="thn_pelatihan" class="form-control" id="thn_pelatihan" placeholder="Tahun Pelatihan" required>
                  </div>
              </div>
              <div class="form-group mt-3">
              <select type="text" name="skpdpengampu_id" class="form-control" id="skpdpengampu_id" placeholder="SKPD Pengampu" required>
               @foreach ($skpd as $item)
                 <option value="{{ $item->id }}">{{ $item->skpd_pengampu }}</option>
                @endforeach
                    </select>
               </div>
               <div class="form-group mt-3">
               <select name="sektorusaha_id"class="form-select single-select-field" data-placeholder="Pilih Jenis Sektor">
                        <option></option>
                        @foreach ($sekt as $item)
                            <option value="{{ $item->id }}">{{ $item->sektor_usaha}}</option>
                        @endforeach
                    </select>
                  </div> 
               <div class="form-group mt-3">
                    <input type="text" name="plth_yg_prnh_ikut" class="form-control" id="plth_yg_prnh_ikut" placeholder="Pelatihan Yang Pernah Diikuti" required>
                  </div>
                </div>
                <div class="text-center">
                <button type="submit" class="btn btn-primary">Kirim</button>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    @include('tools.user.footer')


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  @include('tools.user.script')
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