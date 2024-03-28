@extends('layouts.app')
@section('content')
<div class="container-fluid about-sect-1">
    <h3 style="color:white;margin-left:1em;">Join Now</h3>
    <span style="color: white;margin-right:1em;">Home/join-now</span>
</div>
    {{-- Join Now Form --}}
    <div class="joinNowMain">
        <h2>Join Now</h2>
        @livewire('join-now')
    </div>
@endsection
