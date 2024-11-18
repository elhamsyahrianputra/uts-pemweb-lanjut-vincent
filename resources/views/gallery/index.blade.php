@extends('layouts.main')

@section('content')
    <div class="section px-2 px-lg-4 pt-5" id="g">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="marker marker-center">Gallery</h2>
            </div>
            <div class="grid bp-gallery pb-3" data-aos="zoom-in-up" data-aos-delay="100">
                <div class="grid-sizer"></div>

                @for ($i = 1; $i <= 15; $i++)
                    <div class="grid-item"><a style="cursor: pointer">
                        <figure class="gallery-item"><img src="/images/gallery/{{ $i }}.jpg"
                                data-bp="/images/gallery/{{ $i }}.jpg" />
                            <figcaption></figcaption>
                        </figure>
                    </a></div>
                @endfor
            </div>
        </div>
    </div>
@endsection
