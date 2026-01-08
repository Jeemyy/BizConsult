<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                <img class="img-fluid" src="{{ asset('assets') }}/img/about.png">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">About Us</div>
                <h2 class="mb-4">Award Wining Consultancy Agency For Your Business</h2>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet
                    diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita
                    duo justo et tempor eirmod</p>
                @if (count($abouts))
                    <div class="row g-3 mb-4">
                        @foreach ($abouts as $item)
                            <div class="col-12 d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa {{ $item->icone }} text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h6>{{ $item->title }}</h6>
                                    <span>{{ $item->description }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Read More</a>
            </div>
        </div>
    </div>
</div>
