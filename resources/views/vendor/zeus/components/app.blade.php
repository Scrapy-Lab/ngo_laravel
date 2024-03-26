@extends('layouts.app')
@section('content')
<!-- Seo Tags -->
<x-seo::meta />
<!-- Seo Tags -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!-- slider cdn -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/script.js"></script>
<script src="{{ asset('js/slider.js') }}"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> -->
@filamentStyles
@stack('styles')
<link rel="stylesheet" href="{{ asset('vendor/zeus/frontend.css') }}">
<style>
    * {
        font-family: 'KoHo', 'Almarai', sans-serif;
    }

    [x-cloak] {
        display: none !important;
    }
</style>
<div class="ourWorkBanner text-center">
    <h1>Blog</h1>
</div>

<header class="bg-gray-100 dark:bg-gray-800">
    <div class="container mx-auto py-2 px-3">
        <div class="flex justify-between items-center">
            <div class="w-full">
                @if (isset($breadcrumbs))
                <nav class="text-gray-400 font-bold my-1" aria-label="Breadcrumb">
                    <ol class="list-none p-0 inline-flex">
                        {{ $breadcrumbs }}
                    </ol>
                </nav>
                @endif
                @if (isset($header))
                <div class="italic font-semibold text-xl text-gray-600 dark:text-gray-100">
                    {{ $header }}
                </div>
                @endif
            </div>
            <span class="bolt-loading animate-pulse"></span>
        </div>
    </div>
</header>

<div class="container mx-auto my-6">
    {{ $slot }}
</div>


@stack('scripts')
@filamentScripts
@livewire('notifications')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function() {

        $('#navbarSupportedContent').removeClass('collapse');

    });
</script>
@endsection