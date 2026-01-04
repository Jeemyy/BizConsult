<!DOCTYPE html>
<html lang="en">

@include('fronts.partials.head')
<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        @include('fronts.partials.spinner')
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
        @include('fronts.partials.navbar')
        @yield('hero')
    </div>
    
        <!-- Navbar & Hero End -->

        @yield('content')

        <!-- Footer Start -->
        @include('fronts.partials.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('fronts.partials.scripts')

    <!-- Template Javascript -->
    <script src="{{asset('assets')}}/js/main.js"></script>
</body>

</html>