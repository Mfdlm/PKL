<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="{{ url('welcome') }}">
        <a href="{{ url('welcome') }}"><img src="{{asset('user/assets/img/pemko.png')}}" alt="pemko logo" class="img-fluid"></a><span>Ekonomi Kreatif</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ url('welcome') }}">Home</a></li>
          <li><a href="{{url('formulir')}}">Formulir</a></li>
          <li><a href="{{ url('data') }}">Data</a></li>
          <li><a href="{{ url('login') }}">Login Admin</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->