{{-- Extends layout --}}
@extends('layouts.front2')

{{-- Content --}}
@section('content')
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
    </section>
  <!-- End Tentang Us Section -->
@endsection

{{-- Scripts Section --}}
@section('scripts')
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
  <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection