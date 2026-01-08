@extends('layouts.master')
@section('title', 'Service')
@section('service-active', 'active')
@section('hero')
    <x-hero-section title="Service" subTitle="Service"></x-hero-section>
@endsection

@section('content')

    <!-- Service Start -->
        <x-fronts.front-services></x-fronts>
    <!-- Service End -->

    <!-- Testimonial Start -->
        <x-fronts.front-testimonials></x-fronts.front-testimonials>
    <!-- Testimonial End -->


    @endsection
