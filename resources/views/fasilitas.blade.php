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
                                Fasilitas
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
        <section id="down-section" class="mb-0 pb-0" style="margin-top: 50px;">
            <div class="container">
                @foreach ($kampus as $item)
                <div class="card shadow-lg border-0 rounded-3 overflow-hidden mb-5" 
                    data-anime='{ "opacity": [0,1], "translateY": [30, 0], "duration": 600, "delay":100, "easing": "easeOutQuad" }'>
                    <div class="card-body p-4">
                        <!-- Judul -->
                        @if ($item->nama)
                        <h5 class="text-center text-dark-gray fw-700 mb-4"
                            data-anime='{ "opacity": [0,1], "translateY": [20, 0], "duration": 600, "delay":200, "easing": "easeOutQuad" }'>
                            {!! $item->nama !!}
                        </h5>
                        @endif

                        <div class="row align-items-center">
                            @if ($item->gambar)
                            <div class="col-lg-6 mb-3 mb-lg-0">
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar Kampus" class="w-100 rounded-3" />
                            </div>
                            @endif
                            <div class="col-lg-6">
                                @if ($item->deskripsi)
                                <p class="mb-3">{!! $item->deskripsi !!}</p>
                                @endif
                                @if ($item->alamat)
                                <p class="mb-2"><strong>Alamat:</strong> {!! $item->alamat !!}</p>
                                @endif
                                @if ($item->nomor)
                                <p class="mb-4"><strong>Nomor:</strong> {!! $item->nomor !!}</p>
                                @endif
                                <a href="{{ route('detail-fasilitas', ['id' => $item->id]) }}" class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span class="bg-base-color"></span>Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <!-- End Section -->
@endsection