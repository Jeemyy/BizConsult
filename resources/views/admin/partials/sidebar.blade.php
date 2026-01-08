      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
              <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                  <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                  <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
              </svg>
            </a>
          </div>

          {{-- Home Page --}}
          <ul class="navbar-nav flex-fill w-100 mb-2">
              <x-sitebar-tap href="{{ route('admin.index') }}" icon="fe-home" text="{{ __('keywords.home') }}"></x-sitebar-tap>
          </ul>
          <p class="text-muted nav-heading mt-4 mb-1">
            <span>{{ __("keywords.component") }}</span>
          </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <x-sitebar-tap href="{{ route('admin.abouts.index') }}" icon="fe-tag" text="{{ __('keywords.abouts') }}"></x-sitebar-tap>
            <x-sitebar-tap href="{{ route('admin.services.index') }}" icon="fe-codesandbox" text="{{ __('keywords.services') }}"></x-sitebar-tap>
            <x-sitebar-tap href="{{ route('admin.features.index') }}" icon="fe-bookmark" text="{{ __('keywords.fetures') }}"></x-sitebar-tap>
            <x-sitebar-tap href="{{ route('admin.messages.index') }}" icon="fe-mail" text="{{ __('keywords.messages') }}"></x-sitebar-tap>
            <x-sitebar-tap href="{{ route('admin.subscribers.index') }}" icon="fe-share-2" text="{{ __('keywords.subscribers') }}"></x-sitebar-tap>
            <x-sitebar-tap href="{{ route('admin.testimonials.index') }}" icon="fe-compass" text="{{ __('keywords.testimonials') }}"></x-sitebar-tap>
            <x-sitebar-tap href="{{ route('admin.settings.index') }}" icon="fe-settings" text="{{ __('keywords.settings') }}"></x-sitebar-tap>
            <x-sitebar-tap href="{{ route('admin.companies.index') }}" icon="fe-globe" text="{{ __('keywords.companies') }}"></x-sitebar-tap>
            <x-sitebar-tap href="{{ route('admin.members.index') }}" icon="fe-users" text="{{ __('keywords.members') }}"></x-sitebar-tap>
        </ul>

        </nav>
      </aside>
