<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MICT SATREPS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
  <link href="plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume - v4.7.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <!-- <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-filter"></i> <span>Tentang SATREPS</span></a></li>
          <li><a href="#organisasi" class="nav-link scrollto"><i class="bx bx-vector"></i> <span>Struktur Organisasi</span></a></li>
          <li><a href="#situs" class="nav-link scrollto"><i class="bx bx-map"></i> <span>Situs Uji</span></a></li>
          <li><a href="https://mict-monitoring.macantech.asia/" target="_blank" class="nav-link scrollto"><i class="bx bx-table"></i> <span>Monitoring</span></a></li>
          <li><a href="#el-marc" class="nav-link scrollto"><i class="bx bx-book-open"></i> <span>EL-MARC</span></a></li>
          <li><a href="#alboom" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Alboom</span></a></li>
          <li><a href="#algies" class="nav-link scrollto"><i class="bx bx-book-alt"></i> <span>Algies</span></a></li>
      </ul> -->
      <ul>
        @foreach($navigations as $navigation)
          <li><a href="{{$navigation->url}}" class="nav-link scrollto"><i class="{{$navigation->icon}}"></i> <span>{{$navigation->name}}</span></a></li>
        @endforeach	
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center ">
    <div class="container" data-aos="zoom-in" data-aos-delay="200">
      <h1>{{$banner->title}}</h1>
      <br>
      <h4>{{$banner->description}}</h4>
      <!-- <h4 >Mariculture adalah komponen penting untuk produksi akuakultur di Indonesia </h4>
      <h4> dengan total produksi mencapai <span style="color: #0563bb; font-weight: 900;">9.034.756 ton (US $ 1.951.097,72)</span> pada tahun </h4>
      <h4 >2014 dan 579.463 orang terlibat dalam kegiatan budidaya</h4> -->
    
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>TENTANG SATREPS</h2>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <img src="{{ asset('storage/Settings/about/'.$about->main_image) }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <p style="text-align: justify;">
              {{$about->main_description}}
            </p>
            <a type="button" class="btn btn-secondary" href="tentang" target="_blank">Lanjut Baca</a>
          </div>
          
        </div>

      </div>
      
      
    </section><!-- End About Section -->

    <section id="organisasi" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Struktur Organisasi</h2>
        </div>

        

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-1 col-md-6 portfolio-item filter-app">
            
          </div>
          
          <div class="col-lg-10 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/Settings/organisation/'.$organisation->image) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Struktur Organisasi</h4>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/Settings/organisation/'.$organisation->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-1 col-md-6 portfolio-item filter-app">
          
          </div>


        </div>

      </div>
    </section><!-- End Portfolio Section -->
    
    <section id="situs" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Situs Uji</h2>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <iframe src="/map" title="Situs Uji" style="width: 100%; height: 600px;"></iframe>
            </div>
          </div>
      </div>
    </section><!-- End Testimonials Section -->

    @foreach($contents as $content)
      <section id="{{$content->code}}" class="resume">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>{{$content->name}}</h2>
          </div>
          @if($content->image_aligntment == 1)
            <div class="row">
              <div class="col-lg-8 mb-5">
                <p style="text-align: justify;">
                  {{$content->description}}
                </p>
              </div>
              <div class="col-lg-4">
                <div class="resume-item pb-0">
                  <img src="{{ asset('storage/Content/'.$content->image) }}" class="img-fluid mb-3" alt="">
                  <a type="button" class="btn" href="{{$content->url}}" target="_blank" style="background-color: #0563bb; color: #fff; width: 100%;">Kunjungi</a>
                </div>
              </div>
            </div>
          @elseif($content->image_aligntment == 2)
          <div class="row">
            <div class="col-lg-4 mb-5">
              <img src="{{ asset('storage/Content/'.$content->image) }}" class="img-fluid mb-3" alt="">
              <a type="button" class="btn" href="{{$content->url}}" target="_blank" style="background-color: #0563bb; color: #fff; width: 100%;">Kunjungi</a>
            </div>
            <div class="col-lg-8">
              <div class="resume-item pb-0 ">
                <p style="text-align: justify;">
                  {{$content->description}}
                </p>
              </div>
            </div>
          </div>
          @endif
          
        </div>
      </section>
    @endforeach	

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>{{$address->title}}</h3>
      <p style="padding-left: 300px; padding-right: 300px;">{{$address->description}}</p>
      <div class="social-links">
        <a href="https://facebook.com" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://instagram.com" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://twitter.com" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://youtube.com" class="youtube"><i class="bx bxl-youtube"></i></a>
      </div>
      <div class="copyright">
        &copy; 2022
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>