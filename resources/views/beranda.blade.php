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
                        <div class="col-lg-8 position-relative text-center page-title-extra-large"
                            data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            
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
                                Desain Komunikasi Visual
                            </h1>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- end page title -->
        <!-- Start Section -->
        <section class="position-relative overflow-hidden section-dark" style="margin-bottom: 0; padding-bottom: 0;">
            <div class="container" style="padding: 0 15px;">
                <div class="row align-items-center position-relative" style="margin-bottom: 10px;">
                    <!-- Kolom Teks -->
                    @if ($tentang && $tentang->deskripsi)
                    <div class="col-lg-6 content-container" style="height: 400px; padding: 0;" data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "delay":50 }'>
                        <h1 class="section-title">Desain Komunikasi Visual.</h1>
                        <p class="section-text" style="text-align: justify;">
                            {!! Str::before($tentang->deskripsi, '</p>') . '</p>' !!}
                        </p>    
                        <a href="/tentang" class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700">
                            <span class="bg-base-color"></span>Tentang Desain Komunikasi Visual
                        </a>
                    </div>
                    @endif

                    <!-- Kolom Gambar -->
                    @if ($tentang && $tentang->thumbnail)
                    <div class="col-lg-6 image-container" style="padding: 0;"
                        data-bottom-top="transform: scale(0.8) translateY(100px); opacity: 0;"
                        data-center="transform: scale(1) translateY(0); opacity: 1;"
                        data-top-bottom="transform: scale(0.8) translateY(-100px); opacity: 0;">
                        <img src="{{ asset('storage/' . $tentang->thumbnail) }}" alt="Biologi" class="img-fluid">
                    </div>
                    @endif
                </div>
            </div>
        </section>
        <!-- End Section -->
        <!-- Start Section -->
        <section class="position-relative overflow-hidden" style="margin-top: 0; padding-top: 0; margin-bottom: 5px;">
            <div class="container" style="padding: 0 15px;">
                <div class="row justify-content-center align-items-center" style="margin-top: 0;">
                    <div class="col-xl-5 col-lg-6 md-mb-14 sm-mb-18 xs-mb-23 position-relative" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="w-75 sm-w-80" data-animation-delay="200" data-shadow-animation="true" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                            @if ($tentang && $tentang->thumbnail)
                            <img src="{{ asset('storage/' . $tentang->thumbnail) }}" alt="" class="border-radius-6px w-100">
                            @endif
                        </div>
                        <div class="w-55 overflow-hidden position-absolute right-15px xs-w-55 bottom-minus-50px" data-shadow-animation="true" data-animation-delay="100" data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)">
                            @if ($tentang && $tentang->thumbnail)
                            <img src="{{ asset('storage/' . $tentang->thumbnail) }}" alt="" class="border-radius-6px box-shadow-quadruple-large w-100" />
                            @endif
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 2000, "delay": 150, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="swiper position-relative magic-cursor" data-slider-options='{ "autoHeight": true, "loop": true, "allowTouchMove": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "effect": "slide" }'>
                            <div class="swiper-wrapper mb-5px" style="margin-bottom: 5px;">
                                <!-- start text slider item -->
                                <div class="swiper-slide" style="margin-bottom: 5px;">
                                    <h1 class="section-title">Visi, Misi dan Tujuan</h1>
                                    <span class="ps-25px pe-25px text-uppercase text-black fs-14 lh-42px fw-700 border-radius-100px d-inline-block" style="background: #FFB300;">Visi</span>
                                    @if ($visiMisiTujuan && $visiMisiTujuan->visi)
                                    <p class="w-95 xl-w-100">{!! $visiMisiTujuan->visi !!}</p>
                                    @endif
                                    <a href="{{ url('/visi-misi-tujuan?tab=visi') }}" class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700 mb-5px" style="margin-top: 5px;">
                                        <span class="bg-base-color"></span>Lihat Selengkapnya
                                    </a>
                                </div>
                                <!-- end text slider item -->
                                <!-- start text slider item -->
                                <div class="swiper-slide" style="margin-bottom: 5px;">
                                    <h1 class="section-title">Visi, Misi dan Tujuan</h1>
                                    <span class="ps-25px pe-25px text-uppercase text-black fs-14 lh-42px fw-700 border-radius-100px d-inline-block" style="background: #FFB300;">Misi</span>
                                    @if ($visiMisiTujuan && is_array($visiMisiTujuan->misi) && count($visiMisiTujuan->misi) > 0)
                                    <p class="w-95 xl-w-100">{!! $visiMisiTujuan->misi[0]['text'] !!}</p>
                                    @endif
                                    <a href="{{ url('/visi-misi-tujuan?tab=misi') }}" class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700 mb-5px" style="margin-top: 5px;">
                                        <span class="bg-base-color"></span>Lihat Selengkapnya
                                    </a>
                                </div>
                                <!-- end text slider item -->
                                <!-- start text slider item -->
                                <div class="swiper-slide" style="margin-bottom: 5px;">
                                    <h1 class="section-title">Visi, Misi dan Tujuan</h1>
                                    <span class="ps-25px pe-25px text-uppercase text-black fs-14 lh-42px fw-700 border-radius-100px d-inline-block" style="background: #FFB300;">Tujuan</span>
                                    @if ($visiMisiTujuan && is_array($visiMisiTujuan->tujuan) && count($visiMisiTujuan->tujuan) > 0)
                                    <p class="w-95 xl-w-100">{!! $visiMisiTujuan->tujuan[0]['text'] !!}</p>
                                    @endif
                                    <a href="{{ url('/visi-misi-tujuan?tab=tujuan') }}" class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700 mb-5px" style="margin-top: 5px;">
                                        <span class="bg-base-color"></span>Lihat Selengkapnya
                                    </a>
                                </div>
                                <!-- end text slider item -->
                            </div> 
                            <div class="d-flex justify-content-center justify-content-lg-start" style="margin-top: 10px;">
                                <!-- start slider navigation -->
                                <div class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 border border-color-extra-medium-gray bg-white"><i class="bi bi-arrow-left-short icon-very-medium text-dark-gray"></i></div>
                                <div class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 border border-color-extra-medium-gray bg-white"><i class="bi bi-arrow-right-short icon-very-medium text-dark-gray"></i></div>
                                <!-- end slider navigation --> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->
        <!-- start page title --> 
        <section class="p-0" style="padding-top: 0; margin-top: -90px;">
            <div class="container">
                <div class="row align-items-center justify-content-center extra-very-small-screen">
                    <div class="col-xl-8 col-lg-10 text-center position-relative page-title-extra-large"
                        data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'
                        style="margin-top: 0;">
                        <h3 class="fw-700 text-dark-gray mb-20px ls-minus-2px">Kata Sambutan</h3>
                        <h2 class="fw-400 ls-0px mb-0">
                            Selamat datang di website resmi program studi Desain Komunikasi Visual IWU
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section class="p-0 position-relative">
            <div class="container">
                <div class="row align-items-center position-relative">
                    <!-- Kolom Gambar -->
                    <div class="col-lg-6">
                        @if ($pimpinanStaff && $pimpinanStaff->foto)
                        <div class="image-container ms-20" data-bottom-top="transform: scale(1.1); opacity: 0.7;" data-top-bottom="transform: scale(1); opacity: 1;">
                            <img 
                                src="{{ asset('storage/' . $pimpinanStaff->foto) }}"
                                alt="Foto Pimpinan"
                                class="img-fluid rounded"
                                style="max-width: 250px;"
                            >
                        </div>
                        @endif
                    </div>
                    <!-- Kolom Teks -->
                    <div class="col-lg-6 content-container" data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "delay":50 }'>
                        @if ($pimpinanStaff && $pimpinanStaff->kata_sambutan)
                        <p class="section-text">
                            {!! Str::before($pimpinanStaff->kata_sambutan, '</p>') . '</p>' !!}
                        </p>
                        @endif
                        <div class="section-text fs-18 text-dark-gray mt-5px mb-10px">
                            @if ($pimpinanStaff && $pimpinanStaff->kata_sambutan)
                            <span class="fw-600">{!! $pimpinanStaff->nama !!},</span> {!! $pimpinanStaff->status !!}
                            @endif
                        </div>
                        <a href="{{ route('pimpinanStaff.showDetail', $pimpinanStaff->id) }}" class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700">
                            <span class="bg-base-color"></span>Lihat Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="pb-0">
            <div class="container">
                <div class="row align-items-center mb-4">
                    <div class="col-md-6 text-center text-md-start sm-mb-20px">
                        <h3 class="fw-600 text-dark-gray mb-0 ls-minus-3px">Berita Terbaru</h3>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <a href="/berita" class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"><span class="bg-base-color"></span>Jelajahi Semua Berita</a>
                    </div>
                </div>
                <div class="row">
                <div class="col-12">
                    <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        <!-- start blog list -->
                        @foreach ($publikasi->where('status', 'Berita')->sortByDesc('waktu')->take(3) as $item)
                        <li class="grid-item">
                            <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                <div class="blog-image" style="height: 200px; overflow: hidden;">
                                    @if ($item->gambar)
                                    <a href="{{ route('detail-berita', ['id' => $item->id]) }}'" class="d-block">
                                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                    </a>
                                    @endif
                                </div>
                                <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; padding-bottom: 0;">
                                    @if ($item->judul)
                                    <a href="{{ route('detail-berita', ['id' => $item->id]) }}'" 
                                    class="card-title mb-3 fw-600 fs-20 text-dark-gray d-inline-block" 
                                    style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                        {!! Str::limit($item->judul, 90) !!}
                                    </a>
                                    @endif
                                    @if ($item->deskripsi)
                                    <p style="margin-top: 5px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                        {!! Str::limit($item->deskripsi, 120) !!}
                                    </p>
                                    @endif
                                    <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                        <div class="me-auto">
                                            @if ($item->waktu)
                                            <span class="blog-date d-inline-block fw-600 text-dark-gray">
                                                {{ \Carbon\Carbon::parse($item->waktu)->translatedFormat('d F Y') }}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        <!-- end blog list -->
                    </ul>
                </div>
            </div>
            </div>
        </section>
        <!-- end section -->
@endsection