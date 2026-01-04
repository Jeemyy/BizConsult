<!doctype html>
<html lang="en">
    @include('admin.auth.partials.head')
  <body class="light @if (LaravelLocalization::setLocale() == "ar") rtl @endif">
        <x-local-lang></x-local-lang>
    @yield('content')
    @include('admin.auth.partials.scripts')
  </body>
</html>
