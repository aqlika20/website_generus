<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Generusbatuaji</title>
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
  <link rel="stylesheet" href="assets/css/evo-calendar.midnight-blue.min.css">
  <link rel="stylesheet" href="assets/css/evo-calendar.min.css">
  <link rel="stylesheet" href="assets/css/calendar.css">

  <style>
      .carousel-inner img{
        height:720px ;
      }
      .text-content{
        position: relative !important;
        text-align: left !important;
      }
      .text-content h3{
        font-family: var(--font-primary);
        font-size: 50px;
        font-weight: 700;
        position: absolute !important;
        top: 25% !important;
        left: 29% !important;
        color: #fff;
        transform: translate(-50%, -50%) !important;
      } 
      .text-content h2{
        font-family: var(--font-primary);
        font-size: 50px;
        font-weight: 700;
        letter-spacing: 3px;
        top: 33% !important;
        left: 30.5% !important;
        position: absolute !important;
        transform: translate(-50%, -50%) !important;
        color: #fff;
      }
      .text-content h4{
        font-family: var(--font-primary);
        font-size:18px;
        font-weight: 300;
        top: 43% !important;
        left:35.2% !important;
        position: absolute !important;
        transform: translate(-50%, -50%) !important;
        color: #fff;
      }
    </style>
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
          <li><a href="#hero">Beranda</a></li>
          <li><a href="#tentang">Tentang</a></li>
          <li><a href="#berita">Berita</a></li>
          <li><a href="#kalender">Kalender</a></li>
          <li><a href="#pengumuman">Pengumuman</a></li>
          <li><a href="#map">Alamat</a></li>

          <li><a href="{{ route('login')}}">Login</a></li>
          {{-- <li><a data-bs-toggle="offcanvas" data-bs-target="#kt_quick_user">HI!!!!!</a></li> --}}
          
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
    
  </header><!-- End Header -->
  <!-- End Header -->

  
  <!-- ======= Slider Section ======= -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="row gy-5" data-aos="fade-in">
        <div class="carousel-item text-content active">
          <img src="assets/img/masjid2.png" class="d-block w-100" alt="" >
          <h3>Selamat Datang</h3>
          <h2>Generus Batu Aji</h2>
          <h4>Website ini dibuat untuk kelancaran Muda-Mudi Generasi Penerus Batu Aji</h4>
        </div>
        <div class="carousel-item text-content active">
          <img src="assets/img/masjid2.png" class="d-block w-100" alt="" >
          <h3>Selamat Datang</h3>
          <h2>Generus Batu Aji</h2>
          <h4>Website ini dibuat untuk kelancaran Muda-Mudi Generasi Penerus Batu Aji</h4>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  <!-- ======= End Slider Section ======= -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero" style="padding-top: 0px !important;">
    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="imgnew"><img src="assets/img/quran.png"></div>
              <div> </div>
              <h4 class="title"><a href="https://quran.com/id" target="_blank" class="stretched-link">Al-Qur'an</a></h4>
            </div>
          </div>
          <!--End Icon Box -->
          
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="imgnew"><img src="assets/img/doa.png"></div>
              <h4 class="title"><a href="{{ route('dashboard.doa')}}" class="stretched-link">Do'a-Do'a</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="imgnew"><img src="assets/img/dalil.png"></div>
              <h4 class="title"><a href="{{ route('dashboard.dalil')}}" class="stretched-link">Dalil-Dalil</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="imgnew"><img src="assets/img/dokumentasi.png"></div>
              <h4 class="title"><a href="https://drive.google.com/drive/folders/1nCgFJJZEH-GgFsMZ5GEgQ4tabCaXOIiq?usp=sharing" target="_blank" class="stretched-link">Dokumentasi</a></h4>
            </div>
          </div>
          <!--End Icon Box -->
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= Tentang Us Section ======= -->
    <section id="tentang" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Tentang</h2>
          <p>Generasi Penerus Batu Aji adalah remaja masjid LDII Baiturrohmah</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>Voluptatem dignissimos provident quasi corporis</h3>
            <img src="assets/img/gambar.png" class="img-fluid rounded-4 mb-4" alt="">
            <p>Ut fugiat ut sunt quia veniam. Voluptate perferendis perspiciatis quod nisi et. Placeat debitis quia recusandae odit et consequatur voluptatem. Dignissimos pariatur consectetur fugiat voluptas ea.</p>
            <p>Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo officia vel. Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut ut repellendus nobis tempore doloribus debitis explicabo similique sit. Accusantium sed ut omnis beatae neque deleniti repellendus.</p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
              <p> 
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/test.png" class="img-fluid rounded-4" alt="">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Tentang Us Section -->


  <!-- ======= Berita Section ======= -->
    <section id="berita" class="blog sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Berita</h2>
          <p>Berikut adalah kegiatan muda mudi Batu Aji</p>
        </div>

        <div class="row gy-4 posts-list">
          @foreach($beritas as $berita)
            <div class="col-xl-4 col-md-6">
              <article>
                <div class="post-img">
                  <img src="{{ asset('storage/Berita/'.$berita->image) }}" alt="" class="img-fluid">
                </div>

                <h2 class="title">
                  <a>{{ $berita->title }}</a>
                </h2>

                <div class="d-flex align-items-center">
                  <p>"{{ $berita->description }}"</p>
                </div>
              </article>
            </div>
          @endforeach		
        </div>
      </div>
    </section>

  <!-- ======= Calendar Section ======= -->
    <section id="kalender" class="blog">
      <div class="section-header">
        <h2>Kalender</h2>
      </div>

      <div class="container" data-aos="fade-up">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@500&display=swap" rel="stylesheet">
        <div id="calendar"></div>
        
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
        <script src="assets/js/evo-calendar.min.js"></script>
        <script>
          $(document).ready(function() {
              $('#calendar').evoCalendar({
              })
          })
        </script>
      </div>
    </section>
  <!-- ======= End Calendar Section ======= -->

    <!-- ======= Pengumuman Section ======= -->
    <section id="pengumuman" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pengumuman</h2>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
          @foreach($pengumumans as $pengumuman)
            <div class="col-lg-4 col-md-6">
              <div class="service-item  position-relative">
                <div class="icon">
                  <i class="bi bi-megaphone"></i>
                </div>
                <h3 class="title">{{ $pengumuman->title }}</h3>
                <p>
                  {{ Str::limit($pengumuman->isi, 50, '') }} 
                  @if (strlen($pengumuman->isi) > 50)
                    <span id="dots-{{ $pengumuman->id }}">...</span>
                    <span id="more-{{ $pengumuman->id }}" style="display: none;">{{ substr($pengumuman->isi, 50) }}</span>
                  @endif
                </p>
                <br>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" onclick="loadMore({{ $pengumuman->id }})" id="myBtn">Citeste mai mult</button>

              </div>
            </div>
          @endforeach	
          <!-- End Service Item -->
        </div>
      </div>
      <script>
        function loadMore(id) {
          var dots = document.getElementById("dots-" + id);
          var moreText = document.getElementById("more-" + id);
          if (moreText.style.display === "none") {
            moreText.style.display = "inline";
            dots.style.display = "none";
          } else {
            moreText.style.display = "none";
            dots.style.display = "inline";
          }
        }
      </script>
    </section><!-- Pengumuman Section -->

    <!-- ======= Map Section ======= -->
      <section id="map" class="services">
        <div class="row gy-4 mb-20" data-aos="fade-up" data-aos-delay="100">
          <div class="map">
            <div class="section-header">
              <h2>Alamat</h2>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3989.1439809098415!2d103.9741277!3d1.0534319!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98dbae8b92d01%3A0x529a1dda6bb66f16!2sMASJID%20BAITUR%20ROHMAH%20(LDII)!5e0!3m2!1sen!2sid!4v1663311750049!5m2!1sen!2sid" width="1300" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>  
      </section>
    <!-- ======= End Map Section ======= -->
    
  </main><!-- End #main -->

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
            <a href="{{ $social->instagram }}" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
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