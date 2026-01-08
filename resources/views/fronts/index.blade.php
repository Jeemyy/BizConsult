@extends('layouts.master')
@section('title', 'Home Page')
@section('home-active', 'active')
@section('hero')
    <div class="container-xxl bg-primary hero-header">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated zoomIn">We Help To Push Your Business To The Top Level</h1>
                    <p class="text-white pb-3 animated zoomIn">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum
                        stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero
                        ipsum clita lorem</p>
                    <a href=""
                        class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">Learn
                        More</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid animated zoomIn" src="{{ asset('assets') }}/img/hero.png" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- About Start -->
    <x-fronts.front-abouts></x-fronts.front-abouts>
    <!-- About End -->


    <!-- Newsletter Start -->
    <x-fronts.front-subscribers></x-fronts.front-subscribers>
    <!-- Newsletter End -->


    <!-- Service Start -->
    <x-fronts.front-services></x-fronts.front-services>
    <!-- Service End -->


    <!-- Features Start -->
    <x-fronts.front-features></x-fronts.front-features>
    <!-- Features End -->


    <!-- Client Start -->
    <x-fronts.front-companies></x-fronts.front-companies>
    <!-- Client End -->


    <!-- Testimonial Start -->
    <x-fronts.front-testimonials></x-fronts.front-testimonials>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <x-fronts.front-members></x-fronts.front-members>
    <!-- Team End -->
@endsection
