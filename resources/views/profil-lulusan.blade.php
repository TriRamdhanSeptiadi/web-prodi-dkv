@extends('layouts.app')

@section('content')
        <!-- start page title -->
        <div style="max-width: 1200px; margin: 0 auto; padding-left: 15px; padding-right: 15px;">
        <section class="top-space-margin page-title-big-typography border-radius-6px lg-border-radius-0px p-0"
                data-parallax-background-ratio="0.5"
                style="background-image: url('{{ asset('images/example2.png') }}'); background-size: cover; background-position: center; min-height: 300px; border-radius: 12px;">
                <div class="opacity-extra-medium" style="background-color: rgba(0, 0, 0, 0.5);"></div>
                <div class="container">
                    <div class="row align-items-center justify-content-center small-screen">
                        <div class="col-lg-8 position-relative text-center page-title-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="m-auto"
                                style="
                                    color: white;
                                    font-family: 'Helvetica Neue', sans-serif;
                                    font-weight: 700;
                                    font-size: 48px;
                                    letter-spacing: 2px;
                                    text-transform: uppercase;
                                    text-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5);
                                    line-height: 1.2;
                                    transition: transform 0.3s ease, opacity 0.3s ease;
                                ">
                                Profil Lulusan
                            </h1>
                        </div>
                        <div class="down-section text-center" data-anime='{ "translateY": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <a href="#down-section" class="section-link">
                                <div class="text-white">
                                    <i class="feather icon-feather-chevron-down icon-very-medium"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
        </section>
        </div>
        <!-- end page title -->
        <!-- Start Section -->
        <section id="down-section" class="mb-0 pb-0" data-anime='{ "opacity": [0, 1], "translate": [0, 0], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }' style="margin-top: 50px;">
            <div class="container text-center">
                <div class="card shadow-lg border-0 rounded-3 overflow-hidden" data-anime='{ "opacity": [0, 1], "translateX": [30, 0], "duration": 600, "delay": 200, "staggervalue": 200, "easing": "easeOutQuad" }'>
                    <div class="card-body p-4">
                        <!-- Paragraf -->
                        @if ($profilLulusan->first() && $profilLulusan->first()->teks)
                        <p class="w-80 xl-w-90 lg-w-100 mx-auto text-muted fs-15" style="text-align: justify; margin-top: 30px;" data-anime='{ "opacity": [0, 1], "translate": [0, 0], "duration": 600, "delay": 400, "staggervalue": 400, "easing": "easeOutQuad" }'>
                            {!! $profilLulusan->first()->teks !!} 
                        </p>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-bordered mt-1">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">No</th>
                                        <th style="width: 25%;">Profil Lulusan</th>
                                        <th>Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php 
                                        $counter = 1;
                                    @endphp
                                    @foreach ($profilLulusan as $item)
                                    <tr data-anime='{ "opacity": [0, 1], "translateX": [30, 0], "duration": 600, "delay": 500, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                        <td class="fs-15">{{ $counter }}</td>
                                        @if ($item->profil_lulusan)
                                        <td class="fs-15">{!! $item->profil_lulusan !!}</td>
                                        @endif
                                        <td style="text-align: justify;" class="fs-15">
                                            <ul style="list-style-type: disc; padding-left: 20px;">
                                                @if ($item->deskripsi)
                                                <li>{!! $item->deskripsi !!}</li>
                                                @endif
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->
        <!-- start section -->
        <section class="bg-gradient-quartz-white border-radius-6px lg-border-radius-0px">
            <div class="container background-no-repeat background-position-top"
                style="background-image: url('https://via.placeholder.com/1126x630')">
                <div class="row justify-content-center mb-3">
                    <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 text-center"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h5 class="text-dark-gray fw-700 ls-minus-1px">Testimoni Alumni</h5>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center"
                    data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="col-12 position-relative ps-8 pe-8 lg-ps-15px lg-pe-15px">
                        <div class="swiper magic-cursor testimonials-style-06"
                            data-slider-options='{
                                "loop": true,
                                "autoplay": { "delay": 4000, "disableOnInteraction": false },
                                "keyboard": { "enabled": true, "onlyInViewport": true },
                                "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav", "effect": "fade" },
                                "autoHeight": true
                            }'>
                            <div class="swiper-wrapper">
                                <!-- Loop through testimonials -->
                                @foreach ($testimoniAlumni as $item)
                                <div class="swiper-slide">
                                    <div class="row align-items-center justify-content-center">
                                        <!-- Testimonial photo -->
                                        @if ($item->foto)
                                        <div class="col-8 col-md-4 col-sm-6 text-center">
                                            <img alt="Foto Alumni" src="{{ asset('storage/' . $item->foto) }}" class="img-fluid rounded-circle">
                                        </div>
                                        @endif
                                        <!-- Testimonial text -->
                                        <div class="col-lg-5 col-md-7 last-paragraph-no-margin text-center text-md-start">
                                            @if ($item->teks)
                                            <span class="mb-5px d-table fs-18 lh-30 fw-500 text-dark-gray">{!! $item->teks !!}</span>
                                            @endif
                                            @if ($item->nama)
                                            <span class="fs-15 text-uppercase fw-800 text-base-color ls-1px">{!! $item->nama !!}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- End Loop -->
                            </div>
                            <!-- Slider navigation -->
                            <div class="swiper-button-previous-nav swiper-button-prev md-left-0px">
                                <i class="feather icon-feather-arrow-left icon-extra-medium text-dark-gray"></i>
                            </div>
                            <div class="swiper-button-next-nav swiper-button-next md-right-0px">
                                <i class="feather icon-feather-arrow-right icon-extra-medium text-dark-gray"></i>
                            </div>
                            <!-- End slider navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
@endsection