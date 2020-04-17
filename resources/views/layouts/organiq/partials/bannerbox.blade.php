@section('bannerbox')
<section>
  <div class="container">
      <div class="row">

        @foreach ($Temp['kala'] as $kala)
          <div class="col-md-4 animation" data-animation="bounceInUp" data-animation-delay="0.2s">
              <div class="banner_box box_shadow4 radius_all_10">
                    <div class="banner_text">
                        <h3>{{ $kala->name }} </h3>
                        <p>{!! $kala->short_description !!}</p>
                        <em><a href="#"><u>خریدکن</u></a></em>
                    </div>
                    <div class="banner_img">
                        <img src="{{asset('assets/images/banner_img1.png')}}" alt="banner_img1">
                    </div>                      
                </div>
          </div>
        @endforeach

      </div>
  </div>
</section>
@endsection

