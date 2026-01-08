@extends('layouts.master')
@section('title', 'About')
@section('about-active', 'active')
@section('hero')
<x-hero-section title="About Us" subTitle="About"></x-hero-section>
@endsection

@section('content')
<!-- About Start -->
<x-fronts.front-abouts></x-fronts.front-abouts>
<!-- About End -->

<!-- Features Start -->
<x-fronts.front-features></x-fronts.front-features>
<!-- Features End -->

<!-- Team Start -->
<x-fronts.front-members></x-fronts.front-members>
<!-- Team End -->
@endsection
