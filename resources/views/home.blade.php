<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Generusbatuaji</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  @if(parse_url(url('/'), PHP_URL_SCHEME) == 'HTTPS')
			
			  <!-- Vendor CSS Files -->
        <link href="{{ secure_asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ secure_asset('assets/css/main.css') }}" rel="stylesheet">

        <!-- Main CSS Calendar -->
        <link rel="stylesheet" href="{{ secure_asset('assets/css/evo-calendar.midnight-blue.min.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('assets/css/evo-calendar.min.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('assets/css/calendar.css') }}">

		@else
        <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

        <!-- Main CSS Calendar -->
        <link rel="stylesheet" href="{{ asset('assets/css/evo-calendar.midnight-blue.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/evo-calendar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/calendar.css') }}">	

		@endif


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
      .read-more-show{
        cursor:pointer;
        color: #ed8323;
      }
      .read-more-hide{
        cursor:pointer;
        color: #ed8323;
      }

      .hide_content{
        display: none;
      }
    </style>
</head>

<body>
  <!-- ======= Header ======= -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="{{ route('index')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="{{ asset('media/logos/Baji.png') }}" alt="">
      </a>
      <nav id="navbar" class="navbar">    
        <ul>
          <li><a href="#hero">Beranda</a></li>
          <li><a href="#tentang">Tentang</a></li>
          <li><a href="#berita">Berita</a></li>
          {{-- <li><a href="#kalender">Kalender</a></li> --}}
          <li><a href="#pengumuman">Pengumuman</a></li>
          <li><a href="#map">Alamat</a></li>

          @auth

          <div class="topbar-item">
            <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-4" data-bs-toggle="offcanvas" data-bs-target="#kt_quick_user">
              <li><a class="text-light">Hi, {{ $currentUser->name }}</a></li>
            </div>
          </div>

          {{-- Fitur Logout Home --}}

          <div class="offcanvas offcanvas-end" tabindex="-1" id="kt_quick_user" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
              <h5 id="offcanvasRightLabel">Offcanvas right</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <!--begin::Header-->

              {{-- DIGANTI NYA DARI SINI --}}
              <div class="d-flex align-items-center mt-5">
                <div class="symbol symbol-100 mr-5">
                  <div class="symbol-label"><i class="far fa-user" style="font-size: 50px;"></i></div>
                </div>
                <div class="d-flex flex-column">
                  <a class="font-weight-bold font-size-h5 text-dark-75">{{$currentUser->username}}</a>
                  <span class="navi-text text-muted text-hover-primary">{{$currentUser->email}}</span>
                </div>
              </div>
              <!--end::Nav-->
              <!--begin::Separator-->
              <div class="navi navi-spacer-x-0 p-0">
                <!--begin::Item-->
                <a href="{{ route('profile')}}" class="navi-item">
                  <div class="navi-link">
                    <div class="symbol symbol-40 bg-light mr-3">
                      <div class="symbol-label">
                        <span class="svg-icon svg-icon-md svg-icon-success">
                          <!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24" />
                              <path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
                              <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
                            </g>
                          </svg>
                          <!--end::Svg Icon-->
                        </span>
                      </div>
                    </div>
                    <div class="navi-text">
                      <div class="font-weight-bold">Profile Settings</div>
                      
                    </div>
                  </div>
                </a>
              </div>
      
              <div class="separator separator-dashed my-7"></div>
              {{-- <a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-light-primary font-weight-bold">Sign Out</a> --}}
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger btn-lg btn-block">Logout</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </div>

          @else
            <li><a href="{{ route('login')}}">Login</a></li>
          @endauth
          
          
          {{-- <li><a data-bs-toggle="offcanvas" data-bs-target="#kt_quick_user">HI!!!!!</a></li> --}}
          
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
    
  </header><!-- End Header -->
  <!-- End Header -->

  
  <!-- ======= Slider Section ======= -->
  <div id="carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-controls">
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
      </ol>
      <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image:url('assets/img/masjid2.png')">
          <div class="container">
          <h1>Selamat Datang</h1>
          <h2>Generus Batu Aji</h2>
          <p>Website ini dibuat untuk kelancaran Muda-Mudi Generasi Penerus Batu Aji</p>
          </div>
      </div>
      <div class="carousel-item active" style="background-image:url('assets/img/masjid2.png')">
        <div class="container">
          <h1>Selamat Datang</h1>
          <h2>Generus Batu Aji</h2>
          <p>Website ini dibuat untuk kelancaran Muda-Mudi Generasi Penerus Batu Aji</p>
        </div>
      </div>
    </div>
  </div>
<!-- ======= End Slider Section ======= -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero" style="padding-top: 0px !important;">
    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="imgnew"><img src="{{ asset('assets/img/quran.png') }}"></div>
              <div> </div>
              <h4 class="title"><a href="https://quran.com/id" target="_blank" class="stretched-link">Al-Qur'an</a></h4>
            </div>
          </div>
          <!--End Icon Box -->
          
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="imgnew"><img src="{{ asset('assets/img/doa.png') }}"></div>
              <h4 class="title"><a href="{{ route('dashboard.doa')}}" class="stretched-link">Do'a-Do'a</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="imgnew"><img src="{{ asset('assets/img/dalil.png') }}"></div>
              <h4 class="title"><a href="{{ route('dashboard.dalil')}}" class="stretched-link">Dalil-Dalil</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="imgnew"><img src="{{ asset('assets/img/dokumentasi.png') }}"></div>
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
            <img src="{{ asset('assets/img/gambar.png') }}" class="img-fluid rounded-4 mb-4" alt="">
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
                <img src="{{ asset('assets/img/test.png') }}" class="img-fluid rounded-4" alt="">
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

        <div class="row gy-4 posts-list" >
          @foreach($beritas as $berita)
            <div class="col-xl-4 col-md-6">
              <article style="background-color: white;">
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

  {{-- <!-- ======= Calendar Section ======= -->
    <section id="kalender" class="blog">
      <div class="section-header">
        <h2>Kalender</h2>
      </div>

      <div class="container" data-aos="fade-up">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@500&display=swap" rel="stylesheet">
        <div id="calendar"></div>
        
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
        <script src="{{ asset('assets/js/evo-calendar.min.js') }}"></script>
        <script>
          $(document).ready(function() {
              $('#calendar').evoCalendar({
              })
          })
        </script>
      </div>
    </section>
  <!-- ======= End Calendar Section ======= --> --}}

    <!-- ======= Pengumuman Section ======= -->
    <section id="pengumuman" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pengumuman</h2>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
          @php
            $count = 0;
          @endphp
          @foreach($pengumumans as $pengumuman)
            <div class="col-lg-4 col-md-6">
              <div class="service-item  position-relative">
                <div class="icon">
                  <i class="bi bi-megaphone"></i>
                </div>
                <h3 class="title">{{ $pengumuman->title }}</h3>
                
                <span id="dots-{{ $pengumuman->id }}">
                  <p>
                  {{-- {!!   Str::words($pengumuman->isi, 10, '...')   !!} --}}
                  </p>
                </span>
                <span id="more-{{ $pengumuman->id }}" style="display: none;">
                  <p>
                    {!! $pengumuman->isi !!}
                  </p>
                </span>
                <br>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" onclick="loadMore({{ $pengumuman->id }})" id="myBtn">Read More</button>

              </div>
            </div>
          @endforeach	
          <!-- End Service Item -->
        </div>
      </div>
      <script type="text/javascript">
        function loadMore(id) {
          // $(".isi").hide();
          var dots = document.getElementById("dots-" + id);
          var moreText = document.getElementById("more-" + id);
          console.log(dots);
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
          <a href="#hero" class="d-flex align-items-center mb-3">
            <img src="{{ asset('media/logos/logo_login.png') }}" alt="" width="20%">
          </a>
          <div class="social-links d-flex mt-4">
            <p>lorem Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p><br>
            <a href="{{ $social->instagram }}" class="instagram" target="_blank">
              <i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Berita</a></li>
            <li><a href="#">Kalender</a></li>
            <li><a href="#">Pengumuman</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
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
            <strong>Email:</strong> generusbatuaji@gmail.com<br>
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
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>