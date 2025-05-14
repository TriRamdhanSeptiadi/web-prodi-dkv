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
                                Jadwal Penerimaan
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
                <div class="card shadow-lg border-0 rounded-3 overflow-hidden"
                    data-anime='{ "opacity": [0,1], "translateY": [30, 0], "duration": 600, "delay":100, "easing": "easeOutQuad" }'>
                    <div class="card-body p-4">
                        <!-- Paragraf -->
                        @if ($jadwalPenerimaan && $jadwalPenerimaan->teks)
                        <p class="w-80 xl-w-90 lg-w-100 mx-auto text-muted fs-15" style="text-align: justify;"
                        data-anime='{ "opacity": [0,1], "translateY": [20, 0], "duration": 600, "delay":400, "easing": "easeOutQuad" }'>
                            {!! $jadwalPenerimaan->teks !!}
                        </p>
                        @endif

                        <!-- Table with fade-in animation -->
                        <div class="table-responsive"
                            data-anime='{ "opacity": [0,1], "duration": 800, "delay": 600, "easing": "easeOutQuad" }'>
                            <table class="table table-bordered mt-1">
                                <tbody>
                                    <tr>
                                        <td class="fs-15" style="width: 30%;">Pendaftaran Sampai Dengan</td>
                                        @if ($jadwalPenerimaan && $jadwalPenerimaan->pendaftaran_sampai_dengan)
                                        <td class="fs-15">{{ \Carbon\Carbon::parse($jadwalPenerimaan->pendaftaran_sampai_dengan)->translatedFormat('d F Y') }}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td class="fs-15" style="width: 30%;">Tes</td>
                                        @if ($jadwalPenerimaan && $jadwalPenerimaan->tes)
                                        <td class="fs-15" style="text-align: center;">{{ \Carbon\Carbon::parse($jadwalPenerimaan->tes)->translatedFormat('d F Y') }}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td class="fs-15" style="width: 30%;">Pengumuman Hasil Tes</td>
                                        @if ($jadwalPenerimaan && $jadwalPenerimaan->pengumuman_hasil_tes)
                                        <td class="fs-15" style="text-align: center;">{{ \Carbon\Carbon::parse($jadwalPenerimaan->pengumuman_hasil_tes)->translatedFormat('d F Y') }}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td class="fs-15" style="width: 30%;">Masa Orientasi</td>
                                        @if ($jadwalPenerimaan && $jadwalPenerimaan->masa_orientasi)
                                        <td class="fs-15" style="text-align: center;">{{ \Carbon\Carbon::parse($jadwalPenerimaan->masa_orientasi)->translatedFormat('d F Y') }}</td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td class="fs-15" style="width: 30%;">Perkuliahan Perdana</td>
                                        @if ($jadwalPenerimaan && $jadwalPenerimaan->perkuliahan_perdana)
                                        <td class="fs-15" style="text-align: center;">{{ \Carbon\Carbon::parse($jadwalPenerimaan->perkuliahan_perdana)->translatedFormat('d F Y') }}</td>
                                        @endif
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->
@endsection