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
            <div class="btn border-0 btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-4" data-bs-toggle="offcanvas" data-bs-target="#kt_quick_user">
              <li><a class="text-light">Hi, {{ $currentUser->name }}</a></li>
            </div>
          </div>

          {{-- Fitur Logout Home --}}

          <div class="offcanvas offcanvas-end" tabindex="-1" id="kt_quick_user" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
              <h5 id="offcanvasRightLabel"></h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <!--begin::Header-->  

              {{-- DIGANTI NYA DARI SINI --}}
              <div style="display: flex; align-items: center;">
                <div class="symbol" style="height: 100%; widht: 100%; margin-right: 1.25rem;">
                  <div class="symbol-label"><i class="far fa-user" style="color: grey; font-size: 50px;"></i></div>
                </div>
                <div class="d-flex flex-column">
                  <a class="font-weight-bold font-size-h5 text-dark-75" style="color: black;">{{$currentUser->name}}</a>
                  <span class="navi-text text-muted text-hover-primary">{{$currentUser->email}}</span>
                </div>
              </div>
              <!--end::Nav-->
              <!--begin::Separator-->
              {{-- <div class="navi navi-spacer-x-0 p-0">
                <!--begin::Item-->
                <a href="{{ route('profile')}}" class="navi-item">
                  <div class="navi-link">
                    <div class="symbol symbol-40 bg-light">
                      <div class="symbol-label">
                        <span class="svg-icon svg-icon-md">
                          <!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24" />
                              <path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="green" />
                              <circle fill="green" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
                            </g>
                          </svg>
                          <!--end::Svg Icon-->
                        </span>
                      </div>
                    </div>
                    <div class="navi-text">
                      <div class="font-weight-bold" style="color: black;">Pengaturan Akun</div>
                      
                    </div>
                  </div>
                </a>
              </div> --}}
      
              <div class="separator separator-dashed my-7"></div>
              <div class="btn btn-danger" style=" margin-top :50px; text-align: center; width: 100%; font-family: 'Poppins', sans-serif; font-weight: bold;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('logout') }}" >
                Logout
              </div>
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
    
</header>