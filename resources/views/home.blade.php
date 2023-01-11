{{-- Extends layout --}}
@extends('layouts.front')

{{-- Content --}}
@section('content')
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
            <h1 class="wel">Selamat Datang</h1>
            <h2 class="gen">Generus Batu Aji</h2>
            <p class="web">Website ini dibuat untuk kelancaran Muda-Mudi Generasi Penerus Batu Aji</p>
            {{-- <p class="webb">Website ini dibuat untuk kelancaran Muda-Mudi Generasi Penerus Batu Aji</p> --}}
            </div>
        </div>
        <div class="carousel-item active" style="background-image:url('assets/img/masjid2.png')">
          <div class="container">
            <h1 class="wel">Selamat Datang</h1>
            <h2 class="gen">Generus Batu Aji</h2>
            <p class="web">Website ini dibuat untuk kelancaran Muda-Mudi Generasi Penerus Batu Aji</p>
            {{-- <p class="webb">Website ini dibuat untuk kelancaran Muda-Mudi Generasi Penerus Batu Aji</p> --}}
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

  <!-- ======= Main ======= -->
    <main id="main">
      <!-- ======= Tentang Us Section ======= -->
        <section id="tentang" class="about">
          <div class="container" data-aos="fade-up">
            <div class="section-header">
              <h2>Tentang</h2>
              <p>Generasi Penerus Batu Aji adalah remaja masjid LDII binaan masjid Baiturrohmah</p>
            </div>

            <div class="row gy-4">
              <div class="col-lg-6">
                <h3>Generus yang Alim, Faqih, ber-Akhlaqul Karimah, dan Mandiri.</h3>
                <img src="{{ asset('assets/img/mumi.jpg') }}" class="img-fluid rounded-4 mb-4" alt="">
                <p>Muda-Mudi Generasi Penerus Batu Aji adalah Muda-Mudi yang memiliki tujuan memiliki Tri sukses pembinaan generus yaitu: Alim Faqih, Akhlaqul Kharimah, dan Mandiri.</p>
                <div class="content ps-0 ps-lg-2">
                <ul>
                  <li><i class="#"></i> Alim dan Faham Agama (Faqih)</li>
                  <p>Mengerti dan memahami kedudukan dirinya sebagai hamba Allah SWT. Melaksanakan kewajiban yang tidak bisa di wakilkan kepada siapapun dan ditunda sesaat pun, yaitu beribadah kepada Allah.
                    <br><br>Mengerti dan memahami bahwa amalan ibadah yang berdasarkan Alquran dan Alhadist yang tidak di campuri dengan bid’ah, khurofat, syirik, tahayyul serta murni niatnya yaitu mengharapkan rahmat Allah dan terhindar dari siksa Allah.
                    <br><br>Mengerti dan memahami peraturan Allah dan Rosul berupa perintah, larangan, halal haram, dosa pahala, surga dan neraka.
                  </p>
                </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="content ps-0 ps-lg-5">
                  <ul>
                    <li><i class="#"></i>Memiliki Akhlaqul Karimah (berkelakuan baik / budiluhur)</li>
                    <p>Generasi Penerus agar memiliki karakter, sopan santun, tata krama, dan budi pekerti yang luhur yang menjadi ciri khas bangsa ini. Dengan demikian generasi Indonesia dapat mengamalkan nilai-nilai yang terkadung dalam Pancasila, sila ke-2, kemanusiaan yang adil dan beradab.
                      <br>
                    </p>
                    <li><i class="#"></i> Mempunyai ketrampilan untuk hidup mandiri</li>
                    <p>Menumbuhkan Generasi Penerus yang dapat hidup denga mandiri, tidak tergantung pada orang lain. 
                    </p>
                  </ul>

                  {{-- <ul>
                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                  </ul> --}}

                  <div class="position-relative mt-4">
                    <img src="{{ asset('assets/img/healing.jpg') }}" class="img-fluid rounded-4" alt="">
                    {{-- <a href="#" class="glightbox play-btn"></a> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      <!-- End Tentang Us Section -->

      <!-- ======= Berita Section ======= -->
        <section id="berita" class="blog sections-bg">
          <div class="container" data-aos="fade-up">

            <div class="section-header">
              <h2>Berita</h2>
              <p>Berikut adalah Berita Kegiatan Muda-Mudi Generus Batu Aji</p>
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
      <!-- End Berita Section -->

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
        <section id="pengumuman" class="services">
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
        </section>
      <!-- Pengumuman Section -->

      <!-- ======= Map Section ======= -->
        <section id="map" class="services sections-bg">
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
      
    </main>
  <!-- End Main -->

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection