<div class="tophead d-flex justify-content-between align-items-center">
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            {{-- <a class="navbar-brand" href="#">Logo</a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('our-projects')}}">Our Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('blogs')}}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="topButtons d-flex gap-4">
      <a href="{{ url('/donate') }}"><button>Donate Now</button></a>
        <button>Join Now</button>
    </div>
</div>




