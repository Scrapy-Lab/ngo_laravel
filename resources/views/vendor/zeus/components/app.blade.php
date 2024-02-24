@extends('layouts.app')
@section('content')
    <!-- Seo Tags -->
    <x-seo::meta />
    <!-- Seo Tags -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=KoHo:ital,wght@0,200;0,300;0,500;0,700;1,200;1,300;1,600;1,700&display=swap"
        rel="stylesheet">
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
