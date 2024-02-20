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
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shortcodes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Post Types</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Campaigns</a>
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
        <button>Donate Now</button>
        <button>Join Now</button>
    </div>
</div>



<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
$(document).ready(function() {
    $('.navbar-nav .nav-link').on('click', function() {
        $('.navbar-nav').find('.active').removeClass('active');
        $(this).addClass('active');
    });
});
</script>
