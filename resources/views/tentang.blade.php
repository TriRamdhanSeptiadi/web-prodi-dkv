@extends('layouts.app')

@section('content')
        <!-- start page title -->
        @if ($tentang && $tentang->thumbnail)
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
                                Tentang Desain Komunikasi Visual
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
        @endif
        <!-- end page title -->
        <!-- start section --> 
        <section id="down-section" class="pb-0" style="margin-top: 50px;">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        @if ($tentang && $tentang->thumbnail)
                        <div class="col-lg-6 col-md-10 md-mb-50px animation-float" data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "delay":50}'> 
                            <img class="w-100" src="{{ asset('storage/' . $tentang->thumbnail) }}" alt="">
                        </div>
                        @endif
                        <div class="col-xl-5 offset-xl-1 col-lg-6" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            @if ($tentang && $tentang->deskripsi)
                            <p class="w-95 lg-w-100 mb-30px">{!! $tentang->deskripsi !!}</p>
                            @endif
                        </div>
                    </div>
                </div>
        </section>
        <!-- end section -->
@endsection