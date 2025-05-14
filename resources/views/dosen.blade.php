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
                                Dosen dan Staf
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
            <div class="container text-center">
                <div class="card shadow-lg border-0 rounded-3 overflow-hidden mb-4">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-12 p-md-0">
                            <ul class="blog-classic blog-wrapper grid-loading grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" 
                                data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'
                                style="list-style: none; padding-left: 0;">
                                    <li class="grid-sizer" style="list-style-type: none;"></li>
                                    <!-- start blog item -->
                                    @foreach ($pimpinanStaff as $item)
                                    <li class="grid-item" style="list-style-type: none; display: inline-block;">
                                        <div class="card bg-transparent border-0 h-100">
                                            @if ($item->foto)
                                            <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                                <a href="{{ route('detail-dosen', ['id' => $item->id]) }}"><img src="{{ asset('storage/' . $item->foto) }}" alt=""></a>
                                            </div>
                                            @endif
                                            <div class="card-body p-0 pt-30px sm-pt-20px lg-pb-20px">
                                            @if ($item->nama)
                                        <!-- Link nama ke halaman detail berdasarkan ID -->
                                            <a href="{{ route('detail-dosen', ['id' => $item->id]) }}" class="card-title fw-600 fs-17 lh-28 text-dark-gray text-dark-gray-hover d-inline-block w-95 sm-w-100">
                                                {!! $item->nama !!}
                                            </a>
                                        @endif
                                        @if ($item->status)
                                        <!-- Link status ke halaman detail berdasarkan ID -->
                                        <a href="{{ route('detail-dosen', ['id' => $item->id]) }}">
                                            {!! $item->status !!}
                                        </a>
                                        @endif
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                    <!-- end blog item -->  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        
        <!-- End Section -->
@endsection