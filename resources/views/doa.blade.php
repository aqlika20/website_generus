<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Generusbatuaji | Do'a</title>
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

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <!-- ======= Header ======= -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="{{ route('index')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="media/logos/Baji.png" alt="">
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('index')}}#hero">Beranda</a></li>
          <li><a href="{{ route('index')}}#tentang">Tentang</a></li>
          <li><a href="{{ route('index')}}#berita">Berita</a></li>
          <li><a href="{{ route('index')}}#kalender">Kalender</a></li>
          <li><a href="{{ route('index')}}#pengumuman">Pengumuman</a></li>
          <li><a href="{{ route('index')}}#map">Alamat</a></li>
          @auth

          <div class="topbar-item">
            <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" data-bs-toggle="offcanvas" data-bs-target="#kt_quick_user">
              <li><a>Hi, {{ $currentUser->name }}</a></li>
            </div>
          </div>

          <div class="offcanvas offcanvas-end" tabindex="-1" id="kt_quick_user" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
              <h5 id="offcanvasRightLabel">Offcanvas right</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <!--begin::Header-->
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
      <div class="row">
        <div class="col" style="background: #a2cbcd; text-align: center;">
          <p style="color: #f0ffff; font-size: 50px; font-weight: bold;">Do'a - Do'a</p>
        </div>
        <div class="col">
          <form class="form-inline">
            <div class="row text-end" style="padding-top: 30px; padding-bottom: 30px;">
              <div class="col">
                <input class="form-control mr-sm-2" style="width: 300px; margin-left: 40%;" type="search" placeholder="Search" aria-label="Search" id="search" name="search">
              </div>
              <!-- <div class="col-2">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </div> -->
            </div>
          </form>
        </div>
      </div>
      <tbody>

      </tbody>
      <br>
<p>batas</p>
      @foreach($doas as $doa)
        <div class="row gy-4" style="margin-top: 50px;">
          <div class="col">
            <div class="position-relative">
              <p style="color: #83b7b7; font-size: 28px; margin: 0 !important; font-weight: bold;">{{ $doa->title }}</p>
              <img src="{{ asset('storage/Doa-Doa/'.$doa->image) }}" alt="" width="300px">
              <p class="mt-3" style="color: #83b7b7;">{{ $doa->latin }}</p>
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

 

  <script type="text/javascript">
    $(document).ready(function(){

      fetch_customer_data();
      function fetch_customer_data(query = ''){
        $.ajax({
          url : '/doa-doa/search',
          type : 'GET',
          data:{query:query},
          success:function(data){
            $('tbody').html(data.table_data);
          }
        });
      }
      $(document).on('keyup', '#search', function(){
        var query = $(this).val();
        fetch_customer_data(query);
      });
    });
    // $('#search').on('keyup',function(){
    //   $value=$(this).val();
    //   $.ajax({
    //     method : 'GET',
    //     url : '{{ route('search.doa') }}',
    //     data:{'search':$value},
    //     success:function(data){
    //       $('tbody').html(data);
    //     }
    //   });
    // })
  </script>
  <script type="text/javascript">
    $.ajaxSetup({ headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    } });
  </script>
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