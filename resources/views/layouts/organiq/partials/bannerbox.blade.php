@section('bannerbox')
<section>
  <div class="container">
      <div class="row">

        @foreach ($sales as $key)
        {{-- @dd($key); --}}
        {{-- @dd($key->faktor_kala()->get()); --}}
          {{-- @if($key->faktor_kala()->get()->first()->num >= 5) --}}
          
            {{-- @foreach ($T['product'] as $p) --}}

            <div class="col-md-4 animation" data-animation="bounceInUp" data-animation-delay="0.2s">
              <div class="banner_box box_shadow4 radius_all_10">

                  <div class="banner_text">
                    <h3>{{ $key->name }} </h3>
                    {{-- <p>{{ $key->short_description }}</p> --}}
                    <em><a href="{{asset('/').'AddToCart/'.$key->id}}"><u>خریدکن</u></a></em>
                  </div>
                  <div class="banner_img">
                    {{-- <img src="{{asset('/').$key->photos()->get()->first()->path}}" alt="banner_img1"> --}}
                  </div> 
                                                             
              </div>
            </div>
            {{-- @endforeach --}}

          
          {{-- @endif --}}
        @endforeach

      </div>
  </div>
</section>
@endsection

