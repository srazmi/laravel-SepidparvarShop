@section('bannerbox')
<section>
  <div class="container">
      <div class="row">

        @foreach ($factor as $key)
        {{-- @dd($key); --}}
        {{-- @dd($key->factor_product()->get()); --}}
          @if($key->factor_product()->get()->first()->num >= 5)
          
            {{-- @foreach ($T['product'] as $p) --}}

            <div class="col-md-4 animation" data-animation="bounceInUp" data-animation-delay="0.2s">
              <div class="banner_box box_shadow4 radius_all_10">

                  <div class="banner_text">
                    <h3>{{ $key->product()->get()->first()->name }} </h3>
                    {{-- <p>{{ $p->short_description }}</p> --}}
                    <em><a href="#"><u>خریدکن</u></a></em>
                  </div>
                  <div class="banner_img">
                    {{-- <img src="{{asset('/').$key->photos()->get()->first()->path}}" alt="banner_img1"> --}}
                  </div> 
                                                             
              </div>
            </div>
            {{-- @endforeach --}}

          
          @endif
        @endforeach

      </div>
  </div>
</section>
@endsection

