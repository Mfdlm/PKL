<!DOCTYPE html>
<html lang="en">

<head>
<title>Dashboard</title>
@include('tools.user.head')
<style>
  .small-box-dropdown-button {
    background-color: #007bff; /* Warna latar belakang */
    color: #fff; /* Warna teks */
    padding: 10px 20px; /* Padding tombol */
    border: none; /* Tanpa border */
    border-radius: 5px; /* Sudut bulat */
    cursor: pointer; /* Kursor jadi tangan saat diarahkan */
  }

  .small-box-dropdown-button:hover {
    background-color: #0056b3; /* Warna latar belakang saat dihover */
  }

  .small-box-dropdown-content {
    display: none;
    padding: 10px;
    margin-top: 10px;
    background-color: #f9f9f9; /* Warna latar belakang konten tambahan */
    border: 1px solid #ddd;
    border-radius: 5px;
  }
</style>

</head>

<body>

  <!-- ======= Header ======= -->
  @include('tools.user.navbar')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"><div>Selamat Datang</div>
            <span>Di Ekonomi Kreatif Banjarmasin</span></h2>
          <p class="animate__animated animate__fadeInUp">Ekonomi kreatif merupakan proses ekonomi yang termasuk kegiatan produksi dan distribusi barang serta jasa di dalamnya yang membutuhkan gagasan dan ide kreatif serta kemampuan intelektual dalam membangunnya.</p>
          
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Jenis-Jenis Sektor Ekonomi Kreatif</h2>
          <p class="animate__animated animate__fadeInUp">Industri ekonomi kreatif tentunya meliputi banyak sektor pekerjaan di dalamnya. Jenis-jenis ekonomi kreatif dibagi menjadi 17 sub sektor yaitu pengembangan permainan, kriya, desain interior, musik, desain, seni rupa, desain produk, (film,animasi dan video), fashion, kuliner, fotografi, desain komunikasi visual, televisi dan radio, arsitektur, periklanan, seni pertunjukan, penerbitan, aplikasi</p>
          
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
    <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Manfaat Ekonomi Kreatif</h2>
        <p class="animate__animated animate__fadeInUp">Manfaat ekonomi kreatif ada 6 yaitu Tidak Ada Batasnya, Distribusi yang Fleksibel, Adanya Kolaborasi, Lebih Banyak Ide dan Gagasan, Fleksibel dalam Pengembangannya, Menggunakan Kreasi yang Dasarnya dari Intelektual keenam manfaat tersebut didapatkan dengan menerapkan ekonomi kreatif. Sehingga untuk menghindari adanya tindakan pencurian karya atau duplikasi kalian perlu mendaftarkan karya kalian pada HAKI atau disebut juga dengan Hak Kekayaan Intelektual. <span>Jadi Ayo Daftarkan Karya Kalian!</span></p>
        <a href="{{url('formulir')}}" class="btn-get-started animate__animated animate__fadeInUp" style="font-size: 20px; padding: 20px 20px;">Ayo Daftar !</a>
    </div>
</div>


      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->
  <section class="services">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box icon-box-cyan">
          <div class="icon"><i class="bx bx-file"></i></div>
          <h4 class="title"><a href="{{url('data')}}">Total Data Pelaku Subsektor</a></h4>
          <h3>{{ $data }}</h3>

          <!-- Dropdown untuk Informasi Tambahan -->
          <div class="small-box-dropdown">
            <button class="small-box-dropdown-button" onclick="toggleDropdown(this)">Lihat</button>
            <div class="small-box-dropdown-content" style="display: none;">
              <p>Kuliner = {{$kuliner}}</p>
              <p>Fashion = {{$musik}}</p>
              <p>Kriya = {{$kriya}}</p>
              <p>Desain Poster = {{$despro}}</p>
              <p>Kuliner = {{$kuliner}}</p>
              <p>Pengembangan Permainan = {{$pengper}}</p>
              <p>Desain Interior = {{$desin}}</p>
              <p>Seni Rupa = {{$senrup}}</p>
              <p>Film,Animasi,Video = {{$fav}}</p>
              <p>Fotografi = {{$fotgraf}}</p>
              <p>Desain Komunikasi Visual = {{$deskom}}</p>
              <p>Televisi dan Radio = {{$tv}}</p>
              <p>Arsitektur = {{$arsi}}</p>
              <p>Periklanan = {{$iklan}}</p>
              <p>Seni Pertunjukan = {{$senper}}</p>
              <p>Penerbitan = {{$terbit}}</p>
              <p>Aplikasi = {{$apk}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <main id="main">
    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 video-box">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/PaIVNs9ROTQ?si=gP4ZwBG6m6o-RCvG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div>
              <h4 class="title"><a href="">Profil Ekonomi Kreatif Kota Banjarmasin</a></h4>
              <p class="description">Silahkan Klik Icon Disamping Untuk Melihat Profil Ekonomi Kreatif Kota Banjarmasin....Jangan Lupa Like and Subscribe Yaa</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>Galery</h2>
          <p>Berikut adalah berbagai macam kegiatan yang diadakan oleh Bidang Ekonomi Kreatif Banjarmasin</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="{{asset('user/assets/img/sari.jpeg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>PRAKTEK PEMBUATAN SARI BUAH-BUAHAN PELATIHAN PENINGKATAN INOVASI DAN HIGIENITAS SAJIAN KULINER YANG DISELENGGARAKAN OLEH KEMENTRIAN PARIWISATA DAN EKONOMI KREATIF</h3>
            <p class="fst-italic">
            Bidang Pengembangan Ekraf Sub Sektor Kuliner di hari ke 2 dan 3 materi dan praktek pembuatan sari buah buahan dalam Pelatihan Peningkatan Inovasi & Higenitas Sajian Kuliner. Diharapkan para peserta yg sebagian besar dari Pokdarwis & Masyarakat umum Kota Banjarmasin dapat memproduksi dan berinovasi menghasilkan produk-produk olahan buah lokal dalam kemasan di Desa wisata mereka dan juga dapat men suplai produk-produk olahan nya ke toko oleh oleh untuk peningkatan sektor ekonomi dan sektor keparawisataan.

            </p>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="{{asset('user/assets/img/barber.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>PELATIHAN BARBERSHOP UNTUK CALON BARBERMAN & LADIES BARBER BANJARMASIN YANG DI LAKSANAKAN DI HOTEL ARIA BARITO BANJARMASIN OLEH BIDANG PENGEMBANGAN EKRAF</h3>
            <p class="fst-italic">
            Sebanyak 45 orang calon Barberman & Ladies Barber Banjarmasin mengikuti Pelatihan Barbershop yang di laksanakan oleh Bidang Pengembangan Ekraf ( Sub Sektor Fashion Hair) di Hotel Aria Barito Banjarmasin Kamis, 13 Juli 2023.
            </p>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="{{asset('user/assets/img/pelatihan.jpeg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5">
            <h3>PELATIHAN PENINGKATAN INOVASI DAN HIGIENITAS SAJIAN KULINER YANG DISELENGGARAKAN OLEH KEMENTRIAN PARAWISATA DAN EKONOMI KREATIF</h3>
            <p>Kementrian Parawisata dan Ekonomi Kreatif melalui Pemko Banjarmasin ( Disbudporapar Bidang Pengembangan Ekraf) menggelar pelatihan peningkatan inovasi dan higienitas sajian kuliner. Dengan adanya kegiatan ini harapannya para pelaku usaha di bidang kuliner dapat meningkatkan kualitas dan berinovasi serta menciptakan produk kreatifitas untuk menunjang sektor parawisata dan ekonomi kreatif di Kota Banjarmasin.</p>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="{{asset('user/assets/img/sablon.jpeg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>PELATIHAN CETAK SARING ATAU CETAK SABLON YANG DIADAKAN OLEH PEMKO BANJARMASIN</h3>
            <p class="fst-italic">
            Pemko Banjarmasin melalui Disbudporapar ( Bidang Ekraf ) melaksanakan Pelatihan Cetak Saring atau Cetak Sablon, 31 Mei 2023 dengan diikuti 50 Peserta dari masyarakat umum.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->
  @include('tools.user.footer')
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script>
  function toggleDropdown(button) {
    var content = button.nextElementSibling;
    if (content.style.display === "none" || content.style.display === "") {
      content.style.display = "block";
    } else {
      content.style.display = "none";
    }
  }
</script>
  
  @include('tools.user.script')
</body>

</html>