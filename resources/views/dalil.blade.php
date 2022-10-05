<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Generusbatuaji | Dalil - Dalil</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Main CSS Calendar -->
  <link rel="stylesheet" href="css/evo-calendar.midnight-blue.min.css">
  <link rel="stylesheet" href="css/evo-calendar.min.css">
  <link rel="stylesheet" href="css/calendar.css">

</head>

<body>
  <!-- ======= Header ======= -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="{{ route('dashboard')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="assets/img/baji.png" alt="">
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('dashboard')}}#hero">Beranda</a></li>
          <li><a href="{{ route('dashboard')}}#tentang">Tentang</a></li>
          <li><a href="{{ route('dashboard')}}#berita">Berita</a></li>
          <li><a href="{{ route('dashboard')}}#kalender">Kalender</a></li>
          <li><a href="{{ route('dashboard')}}#pengumuman">Pengumuman</a></li>
          <li><a href="{{ route('dashboard')}}#map">Alamat</a></li>
          <li><a href="{{ route('login')}}">Login</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section class="about" style="background: #f0ffff;">
    <div class="container" data-aos="fade-up">
      <div class="col-md-3" style="background: #a2cbcd; text-align: center;">
        <p style="color: #f0ffff; font-size: 50px; font-weight: bold;">Dalil - Dalil</p>
      </div>

      @foreach($dalils as $dalil)
        <div class="row gy-4" style="margin-top: 50px;">
          <div class="col">
            <div class="position-relative">
              <p style="color: #83b7b7; font-size: 28px; margin: 0 !important; font-weight: bold;">{{ $dalil->title }}</p>
              <img src="{{ asset('storage/Dalil-Dalil/'.$dalil->image) }}" alt="" width="300px">
              <p class="mt-3" style="color: #83b7b7;">{{ $dalil->latin }}</p>
              <p class="mt-3" style="color: #83b7b7;"><a style="font-weight: bold;">Artinya : </a>{{ $dalil->arti }}</p>
            </div>
          </div><!-- End Service Item -->
        </div>
      @endforeach

    </div>
  </section><!-- End Tentang Us Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Impact</span>
          </a>
          <p>lorem Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Klik Disini</h4>
          <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Berita</a></li>
            <li><a href="#">Kalender</a></li>
            <li><a href="#">Pengumuman</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Klik Disini</h4>
          <ul>
            <li><a href="#">Al-Qur'an</a></li>
            <li><a href="#">Do'a-Do'a</a></li>
            <li><a href="#">Dalil-Dalil</a></li>
            <li><a href="#">Dokumentasi</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Hubungi</h4>
          <p>
            Jl. Permata Puri, RT.03/RW.09, Buliang, <br>
            Kec. Batu Aji, Kota Batam,<br>
            Kepulauan Riau 29425 <br><br>
            <strong>WhatsApp:</strong> +62 877 7526 0150<br>
            <strong>Email:</strong>generusbatuaji@gmail.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <span>Generasi Penerus Batu Aji</span>
      </div>
      <div class="credits">
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>