@if (count($companies))
    <div class="container-xxl bg-primary my-6 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="owl-carousel client-carousel">
                @foreach ($companies as $item)
                    <a href="#"><img class="img-fluid" src="{{ asset('storage/companies/'.$item->image) }}" alt=""></a>
                @endforeach
            </div>
        </div>
    </div>
@endif
