<div>
    <div class="carousel-inner w-100">
        @foreach ($banners as  $banner)
        <div class="carousel-item @if ($loop->index == 0) active @endif  crsl-txt">
            <img class="Myimg" src="{{ asset('storage/'.$banner->image) }}" alt="..." />
            <!-- <div class="carousel-caption d-none d-md-block CustomCarousel"> -->
                <div class="card-img-overlay mYcard">
                    {{-- @dd($banner) --}}

                    {{-- <h1 class="card-title Custom-title">{{$banner->name}} </h1> --}}

                    <div class="banner-text">
                        <h1 class="card-title Custom-title">
                            @php
                                $text = $banner->name;
                                $words = explode(' ', $text);
                                $half = ceil(count($words) / 2);
                                $firstHalf = implode(' ', array_slice($words, 0, $half));
                                $secondHalf = implode(' ', array_slice($words, $half));
                            @endphp
                            {{ $firstHalf }} <br> {{ $secondHalf }}
                        </h1>
                    </div>
                    {{-- <p class="card-text footertxt">
                    {{$banner->description}}
                    </p> --}}
                    <div class="banner_btn">


                        <a href="{{ url('/donate') }}"><button class="read-btn_banner" style="">Donate Now</button></a>
                        <a href="{{ url('/join-now') }}"><button class="read-btn_banner" >Join Now</button></a>
                        {{-- <a href="{{route('donate-now')}}"><button type="button" class="bnner-btns">Donate Now</button></a>
                        <a href="{{route('join-now')}}"><button type="button" class="bnner-btns">Join Now</button></a> --}}
                    </div>
                </div>
            <!-- </div> -->
        </div>
        @endforeach
    </div>
</div>
