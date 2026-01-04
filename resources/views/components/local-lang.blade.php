<div>
    @php
        $local = LaravelLocalization::getCurrentLocale() == 'ar'? 'en': 'ar';
    @endphp
    <a class="nav-link text-muted my-2 text-primary" href="{{ LaravelLocalization::getLocalizedURL($local) }}" id="langSwitcher">
        {{ strtoupper($local) }}
    </a>
</div>

