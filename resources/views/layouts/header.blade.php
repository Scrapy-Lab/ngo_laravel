<div class="tophead d-flex justify-content-between align-items-center sticky-top bg-body-tertiary">
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ url('images/logo/site_logo.png') }}" alt="" width="80px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link @if ( Route::currentRouteName() == 'home') active  @endif "  href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if ( Route::currentRouteName() == 'our-projects') active  @endif" href="{{ route('our-projects')}}">Our Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if ( Route::currentRouteName() == 'blogs') active  @endif" href="{{route('blogs')}}">Blog</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link @if ( Route::currentRouteName() == 'about-us') active  @endif" href="{{ route('about-us') }}">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if ( Route::currentRouteName() == 'contact-us') active  @endif" href="{{ route('contact-us') }}">Contact us</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
    <div class="topButtons d-flex gap-4">
      <a href="{{ url('/donate') }}"><button class="read-btn">Donate Now</button></a>
      <a href="{{ url('/join-now') }}"><button class="read-btn" >Join Now</button></a>
    </div>
</div>




