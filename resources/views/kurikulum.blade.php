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
                                Kurikulum
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
                    data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="card-body p-4">
                        <!-- Judul dengan animasi fade-in -->
                        <h5 class="text-dark-gray fw-700" 
                            data-anime='{ "translateY": [20, 0], "opacity": [0,1], "duration": 800, "delay": 200, "easing": "easeOutQuad" }'>
                            Kurikulum Program Studi Desain Komunikasi Visual
                        </h5>

                        <!-- Paragraf dengan animasi fade-in dan slide-up -->
                        @if ($kurikulum && $kurikulum->teks)
                        <p class="w-80 xl-w-90 lg-w-100 mx-auto text-muted fs-15"
                        style="text-align: justify;"
                        data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 400, "easing": "easeOutQuad" }'>
                            {!! $kurikulum->teks !!}
                        </p>
                        @endif

                        @if ($kurikulum && $kurikulum->foto)
                        <div class="d-flex justify-content-center align-items-center animation-float" 
                            data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                            <img class="w-50" src="{{ asset('storage/' . $kurikulum->foto) }}" alt="">
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->
        <!-- Start Section -->
        <section id="struktur-kurikulum" class="mb-0 pb-0">
            <div class="container text-center">
                <div class="card shadow-lg border-0 rounded-3 overflow-hidden"
                    data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="card-body p-4">
                        <!-- Title with fade-in and slide-up animation -->
                        <h5 class="text-dark-gray fw-700"
                            data-anime='{ "translateY": [20, 0], "opacity": [0,1], "duration": 800, "delay": 200, "easing": "easeOutQuad" }'>
                            Struktur Kurikulum
                        </h5>

                        <!-- Paragraph with fade-in and slide-up animation -->
                        <p class="w-80 xl-w-90 lg-w-100 mx-auto text-muted fs-15"
                            style="text-align: justify; margin-top: 30px;"
                            data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 400, "easing": "easeOutQuad" }'>
                            Struktur kurikulum Program Studi Desain Komunikasi Visual Universitas Wanita Internasional dirancang untuk membekali mahasiswa dengan pengetahuan dan keterampilan yang dibutuhkan dalam bidang teknologi informasi. Kurikulum ini mengintegrasikan pembelajaran teori dan praktik secara seimbang, dengan perhatian khusus pada pengembangan kompetensi dasar yang relevan dengan kebutuhan industri digital dan masyarakat modern.
                        </p>

                        <!-- Nav Tabs with fade-in and slide-up animation -->
                        <ul class="nav nav-tabs mb-1" id="myTab" role="tablist" style="border-bottom: 2px solid #ddd;"
                            data-anime='{ "translateY": [20, 0], "opacity": [0,1], "duration": 800, "delay": 600, "easing": "easeOutQuad" }'>
                            <li class="nav-item me-0" role="presentation">
                                <button class="nav-link active" id="semester1-tab" data-bs-toggle="tab" data-bs-target="#semester1" type="button" role="tab" aria-controls="semester1" aria-selected="true">Semester 1</button>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <button class="nav-link" id="semester2-tab" data-bs-toggle="tab" data-bs-target="#semester2" type="button" role="tab" aria-controls="semester2" aria-selected="false">Semester 2</button>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <button class="nav-link" id="semester3-tab" data-bs-toggle="tab" data-bs-target="#semester3" type="button" role="tab" aria-controls="semester3" aria-selected="false">Semester 3</button>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <button class="nav-link" id="semester4-tab" data-bs-toggle="tab" data-bs-target="#semester4" type="button" role="tab" aria-controls="semester4" aria-selected="false">Semester 4</button>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <button class="nav-link" id="semester5-tab" data-bs-toggle="tab" data-bs-target="#semester5" type="button" role="tab" aria-controls="semester5" aria-selected="false">Semester 5</button>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <button class="nav-link" id="semester6-tab" data-bs-toggle="tab" data-bs-target="#semester6" type="button" role="tab" aria-controls="semester6" aria-selected="false">Semester 6</button>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <button class="nav-link" id="semester7-tab" data-bs-toggle="tab" data-bs-target="#semester7" type="button" role="tab" aria-controls="semester7" aria-selected="false">Semester 7</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="semester8-tab" data-bs-toggle="tab" data-bs-target="#semester8" type="button" role="tab" aria-controls="semester8" aria-selected="false">Semester 8</button>
                            </li>
                        </ul>
                        
                        <div class="tab-content" id="myTabContent">
                            <!-- Tab Semester 1 -->
                            <div class="tab-pane fade show active" id="semester1" role="tabpanel" aria-labelledby="semester1-tab">
                                <div class="table-responsive">
                                    <table class="table table-bordered mt-1">
                                        <thead>
                                            <tr>
                                                <th style="width: 20%;">Kode Mata Kuliah</th>
                                                <th>Nama Mata Kuliah</th>
                                                <th style="width: 10%;">SKS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php 
                                                $total_sks = 0; 
                                            @endphp
                                            @foreach ($semester1 as $item)
                                            <tr> 
                                                @if ($item->kode_mata_kuliah)
                                                <td class="fs-15">{!! $item->kode_mata_kuliah !!}</td>
                                                @endif
                                                @if ($item->nama_mata_kuliah)
                                                <td style="text-align: center;" class="fs-15">{!! $item->nama_mata_kuliah !!}</td>
                                                @endif
                                                @if ($item->sks)
                                                <td class="fs-15">{!! $item->sks !!}</td>
                                                @php $total_sks += $item->sks; @endphp
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <p class="w-80 xl-w-90 lg-w-100 mx-auto text-muted fs-15" style="text-align: justify;">
                                    Total SKS yang ditawarkan: {{ $total_sks }}
                                </p>
                            </div>

                            <!-- Tab Semester 2 -->
                            <div class="tab-pane fade" id="semester2" role="tabpanel" aria-labelledby="semester2-tab">
                                <div class="table-responsive">
                                    <table class="table table-bordered mt-1">
                                        <thead>
                                            <tr>
                                                <th style="width: 20%;">Kode Mata Kuliah</th>
                                                <th>Nama Mata Kuliah</th>
                                                <th style="width: 10%;">SKS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php 
                                                $total_sks = 0; 
                                            @endphp
                                            @foreach ($semester2 as $item)
                                            <tr> 
                                                @if ($item->kode_mata_kuliah)
                                                <td class="fs-15">{!! $item->kode_mata_kuliah !!}</td>
                                                @endif
                                                @if ($item->nama_mata_kuliah)
                                                <td style="text-align: center;" class="fs-15">{!! $item->nama_mata_kuliah !!}</td>
                                                @endif
                                                @if ($item->sks)
                                                <td class="fs-15">{!! $item->sks !!}</td>
                                                @php $total_sks += $item->sks; @endphp
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <p class="w-80 xl-w-90 lg-w-100 mx-auto text-muted fs-15" style="text-align: justify;">
                                    Total SKS yang ditawarkan: {{ $total_sks }}   
                                </p>
                            </div>

                            <!-- Tab Semester 3 -->
                            <div class="tab-pane fade" id="semester3" role="tabpanel" aria-labelledby="semester3-tab">
                                <div class="table-responsive">
                                    <table class="table table-bordered mt-1">
                                        <thead>
                                            <tr>
                                                <th style="width: 20%;">Kode Mata Kuliah</th>
                                                <th>Nama Mata Kuliah</th>
                                                <th style="width: 10%;">SKS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php 
                                                $total_sks = 0; 
                                            @endphp
                                            @foreach ($semester3 as $item)
                                            <tr> 
                                                @if ($item->kode_mata_kuliah)
                                                <td class="fs-15">{!! $item->kode_mata_kuliah !!}</td>
                                                @endif
                                                @if ($item->nama_mata_kuliah)
                                                <td style="text-align: center;" class="fs-15">{!! $item->nama_mata_kuliah !!}</td>
                                                @endif
                                                @if ($item->sks)
                                                <td class="fs-15">{!! $item->sks !!}</td>
                                                @php $total_sks += $item->sks; @endphp
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <p class="w-80 xl-w-90 lg-w-100 mx-auto text-muted fs-15" style="text-align: justify;">
                                    Total SKS yang ditawarkan: {{ $total_sks }}   
                                </p>
                            </div>

                            <!-- Tab Semester 4 -->
                            <div class="tab-pane fade" id="semester4" role="tabpanel" aria-labelledby="semester4-tab">
                                <div class="table-responsive">
                                    <table class="table table-bordered mt-1">
                                        <thead>
                                            <tr>
                                                <th style="width: 20%;">Kode Mata Kuliah</th>
                                                <th>Nama Mata Kuliah</th>
                                                <th style="width: 10%;">SKS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php 
                                                $total_sks = 0; 
                                            @endphp
                                            @foreach ($semester4 as $item)
                                            <tr> 
                                                @if ($item->kode_mata_kuliah)
                                                <td class="fs-15">{!! $item->kode_mata_kuliah !!}</td>
                                                @endif
                                                @if ($item->nama_mata_kuliah)
                                                <td style="text-align: center;" class="fs-15">{!! $item->nama_mata_kuliah !!}</td>
                                                @endif
                                                @if ($item->sks)
                                                <td class="fs-15">{!! $item->sks !!}</td>
                                                @php $total_sks += $item->sks; @endphp
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <p class="w-80 xl-w-90 lg-w-100 mx-auto text-muted fs-15" style="text-align: justify;">
                                    Total SKS yang ditawarkan: {{ $total_sks }}  
                                </p>
                            </div>

                            <!-- Tab Semester 5 -->
                            <div class="tab-pane fade" id="semester5" role="tabpanel" aria-labelledby="semester5-tab">
                                <div class="table-responsive">
                                    <table class="table table-bordered mt-1">
                                        <thead>
                                            <tr>
                                                <th style="width: 20%;">Kode Mata Kuliah</th>
                                                <th>Nama Mata Kuliah</th>
                                                <th style="width: 10%;">SKS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php 
                                                $total_sks = 0; 
                                            @endphp
                                            @foreach ($semester5 as $item)
                                            <tr> 
                                                @if ($item->kode_mata_kuliah)
                                                <td class="fs-15">{!! $item->kode_mata_kuliah !!}</td>
                                                @endif
                                                @if ($item->nama_mata_kuliah)
                                                <td style="text-align: center;" class="fs-15">{!! $item->nama_mata_kuliah !!}</td>
                                                @endif
                                                @if ($item->sks)
                                                <td class="fs-15">{!! $item->sks !!}</td>
                                                @php $total_sks += $item->sks; @endphp
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <p class="w-80 xl-w-90 lg-w-100 mx-auto text-muted fs-15" style="text-align: justify;">
                                    Total SKS yang ditawarkan: {{ $total_sks }}  
                                </p>
                            </div>

                            <!-- Tab Semester 6 -->
                            <div class="tab-pane fade" id="semester6" role="tabpanel" aria-labelledby="semester6-tab">
                                <div class="table-responsive">
                                    <table class="table table-bordered mt-1">
                                        <thead>
                                            <tr>
                                                <th style="width: 20%;">Kode Mata Kuliah</th>
                                                <th>Nama Mata Kuliah</th>
                                                <th style="width: 10%;">SKS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php 
                                                $total_sks = 0; 
                                            @endphp
                                            @foreach ($semester6 as $item)
                                            <tr> 
                                                @if ($item->kode_mata_kuliah)
                                                <td class="fs-15">{!! $item->kode_mata_kuliah !!}</td>
                                                @endif
                                                @if ($item->nama_mata_kuliah)
                                                <td style="text-align: center;" class="fs-15">{!! $item->nama_mata_kuliah !!}</td>
                                                @endif
                                                @if ($item->sks)
                                                <td class="fs-15">{!! $item->sks !!}</td>
                                                @php $total_sks += $item->sks; @endphp
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <p class="w-80 xl-w-90 lg-w-100 mx-auto text-muted fs-15" style="text-align: justify;">
                                    Total SKS yang ditawarkan: {{ $total_sks }} 
                                </p>
                            </div>

                            <!-- Tab Semester 7 -->
                            <div class="tab-pane fade" id="semester7" role="tabpanel" aria-labelledby="semester7-tab">
                                <div class="table-responsive">
                                    <table class="table table-bordered mt-1">
                                        <thead>
                                            <tr>
                                                <th style="width: 20%;">Kode Mata Kuliah</th>
                                                <th>Nama Mata Kuliah</th>
                                                <th style="width: 10%;">SKS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php 
                                                $total_sks = 0; 
                                            @endphp
                                            @foreach ($semester7 as $item)
                                            <tr> 
                                                @if ($item->kode_mata_kuliah)
                                                <td class="fs-15">{!! $item->kode_mata_kuliah !!}</td>
                                                @endif
                                                @if ($item->nama_mata_kuliah)
                                                <td style="text-align: center;" class="fs-15">{!! $item->nama_mata_kuliah !!}</td>
                                                @endif
                                                @if ($item->sks)
                                                <td class="fs-15">{!! $item->sks !!}</td>
                                                @php $total_sks += $item->sks; @endphp
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <p class="w-80 xl-w-90 lg-w-100 mx-auto text-muted fs-15" style="text-align: justify;">
                                    Total SKS yang ditawarkan: {{ $total_sks }}
                                </p>
                            </div>

                            <!-- Tab Semester 8 -->
                            <div class="tab-pane fade" id="semester8" role="tabpanel" aria-labelledby="semester8-tab">
                                <div class="table-responsive">
                                    <table class="table table-bordered mt-1">
                                        <thead>
                                            <tr>
                                                <th style="width: 20%;">Kode Mata Kuliah</th>
                                                <th>Nama Mata Kuliah</th>
                                                <th style="width: 10%;">SKS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php 
                                                $total_sks = 0; 
                                            @endphp
                                            @foreach ($semester8 as $item)
                                            <tr> 
                                                @if ($item->kode_mata_kuliah)
                                                <td class="fs-15">{!! $item->kode_mata_kuliah !!}</td>
                                                @endif
                                                @if ($item->nama_mata_kuliah)
                                                <td style="text-align: center;" class="fs-15">{!! $item->nama_mata_kuliah !!}</td>
                                                @endif
                                                @if ($item->sks)
                                                <td class="fs-15">{!! $item->sks !!}</td>
                                                @php $total_sks += $item->sks; @endphp
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <p class="w-80 xl-w-90 lg-w-100 mx-auto text-muted fs-15" style="text-align: justify;">
                                    Total SKS yang ditawarkan: {{ $total_sks }} 
                                </p>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->
        <!-- Start Section -->
        <section id="kompetensi" class="mb-0 pb-0">
            <div class="container text-center">
                <div class="card shadow-lg border-0 rounded-3 overflow-hidden"
                    data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="card-body p-4">
                        <!-- Title with fade-in animation -->
                        <h5 class="text-dark-gray fw-700"
                            data-anime='{ "translateY": [20, 0], "opacity": [0,1], "duration": 800, "delay": 200, "easing": "easeOutQuad" }'>
                            Standar Kompetensi Lulusan
                        </h5>

                        <!-- Paragraph with fade-in and slide-up animation -->
                        @if ($standarKompetensiLulusan->first() && $standarKompetensiLulusan->first()->teks)
                        <p class="w-80 xl-w-90 lg-w-100 mx-auto text-muted fs-15" style="text-align: justify;"
                            data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 400, "easing": "easeOutQuad" }'>
                            {!! $standarKompetensiLulusan->first()->teks !!} 
                        </p>
                        @endif

                        <!-- Table with fade-in animation -->
                        <div class="table-responsive"
                            data-anime='{ "opacity": [0,1], "duration": 800, "delay": 600, "easing": "easeOutQuad" }'>
                            <table class="table table-bordered mt-1">
                                <thead>
                                    <tr>
                                        <th style="width: 4%;">No</th>
                                        <th>Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php 
                                        $counter = 1; 
                                        $subCounter = 1; 
                                    @endphp
                                    @foreach ($standarKompetensiLulusan as $item)
                                    <tr>
                                        <td class="fs-15">{{ $counter }}.{{ $subCounter++ }}</td>
                                        @if ($item->deskripsi)
                                        <td style="text-align: left;" class="fs-15">{!! $item->deskripsi !!}</td>
                                        @endif
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
         <!-- Start Section -->
        <section id="capaian" class="mb-0 pb-0">
            <div class="container text-center">
                <div class="card shadow-lg border-0 rounded-3 overflow-hidden"
                    data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="card-body p-4">
                        <!-- Title with fade-in animation -->
                        <h5 class="text-dark-gray fw-700"
                            data-anime='{ "translateY": [20, 0], "opacity": [0,1], "duration": 800, "delay": 200, "easing": "easeOutQuad" }'>
                            Capaian Pembelajaran Lulusan (CPL)
                        </h5>

                        <!-- Paragraph with fade-in and slide-up animation -->
                        @if ($capaianPembelajaran->first() && $capaianPembelajaran->first()->teks)
                        <p class="w-80 xl-w-90 lg-w-100 mx-auto text-muted fs-15" style="text-align: justify;"
                            data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 400, "easing": "easeOutQuad" }'>
                            {!! $capaianPembelajaran->first()->teks !!} 
                        </p>
                        @endif

                        <!-- Table with fade-in animation -->
                        <div class="table-responsive"
                            data-anime='{ "opacity": [0,1], "duration": 800, "delay": 600, "easing": "easeOutQuad" }'>
                            <table class="table table-bordered mt-1">
                                <thead>
                                    <tr>
                                        <th style="width: 4%;">No</th>
                                        <th>Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php 
                                        $counter = 2; 
                                        $subCounter = 1; 
                                    @endphp
                                    @foreach ($capaianPembelajaran as $item)
                                    <tr>
                                        <td class="fs-15">{{ $counter }}.{{ $subCounter++ }}</td>
                                        @if ($item->deskripsi)
                                        <td style="text-align: left;" class="fs-15">{!! $item->deskripsi !!}</td>
                                        @endif
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Tab Navigation -->
                        <ul class="nav nav-tabs mb-1" id="myTab" role="tablist" style="border-bottom: 2px solid #ddd;">
                            <li class="nav-item me-0" role="presentation">
                                <button class="nav-link active" id="sikap-tab" data-bs-toggle="tab" data-bs-target="#sikap" type="button" role="tab" aria-controls="sikap" aria-selected="true">
                                    Sikap
                                </button>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <button class="nav-link" id="pengetahuan-tab" data-bs-toggle="tab" data-bs-target="#pengetahuan" type="button" role="tab" aria-controls="pengetahuan" aria-selected="false">
                                    Pengetahuan
                                </button>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <button class="nav-link" id="keterampilanumum-tab" data-bs-toggle="tab" data-bs-target="#keterampilanumum" type="button" role="tab" aria-controls="keterampilanumum" aria-selected="false">
                                    Keterampilan Umum
                                </button>
                            </li>
                            <li class="nav-item me-1" role="presentation">
                                <button class="nav-link" id="keterampilankhusus-tab" data-bs-toggle="tab" data-bs-target="#keterampilankhusus" type="button" role="tab" aria-controls="keterampilankhusus" aria-selected="false">
                                    Keterampilan Khusus
                                </button>
                            </li>
                        </ul>

                        <!-- Tab Content with fade-in animation -->
                        <div class="tab-content" id="myTabContent">
                            <!-- Tab Sikap -->
                            <div class="tab-pane fade show active" id="sikap" role="tabpanel" aria-labelledby="sikap-tab">
                                <div class="table-responsive" data-anime='{ "opacity": [0,1], "duration": 800, "delay": 100, "easing": "easeOutQuad" }'>
                                    <table class="table table-bordered mt-1">
                                        <thead>
                                            <tr>
                                                <th style="width: 5%;">No</th>
                                                <th>Indikator</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php 
                                                $counter = 3; 
                                                $subCounter = 1; 
                                            @endphp
                                            @foreach ($sikapCPL as $item)
                                            <tr>
                                                <td class="fs-15">{{ $counter }}.{{ $subCounter++ }}</td>
                                                @if ($item->indikator)
                                                <td style="text-align: justify;" class="fs-15">{!! $item->indikator !!}</td>
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Tab Pengetahuan -->
                            <div class="tab-pane fade" id="pengetahuan" role="tabpanel" aria-labelledby="pengetahuan-tab">
                                <div class="table-responsive">
                                    <table class="table table-bordered mt-1">
                                        <thead>
                                            <tr>
                                                <th style="width: 5%;">No</th>
                                                <th>Indikator</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @php 
                                                $counter = 4; 
                                                $subCounter = 1; 
                                            @endphp
                                            @foreach ($pengetahuanCPL as $item)
                                            <tr>
                                                <td class="fs-15">{{ $counter }}.{{ $subCounter++ }}</td>
                                                @if ($item->indikator)
                                                <td style="text-align: justify;" class="fs-15">{!! $item->indikator !!}</td>
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Tab Keterampilan Umum -->
                            <div class="tab-pane fade" id="keterampilanumum" role="tabpanel" aria-labelledby="keterampilanumum-tab">
                                <div class="table-responsive">
                                    <table class="table table-bordered mt-1">
                                        <thead>
                                            <tr>
                                                <th style="width: 5%;">No</th>
                                                <th>Indikator</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php 
                                                $counter = 5; 
                                                $subCounter = 1; 
                                            @endphp
                                            @foreach ($keterampilanUmumCPL as $item)
                                            <tr>
                                                <td class="fs-15">{{ $counter }}.{{ $subCounter++ }}</td>
                                                @if ($item->indikator)
                                                <td style="text-align: justify;" class="fs-15">{!! $item->indikator !!}</td>
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Tab Keterampilan Khusus -->
                            <div class="tab-pane fade" id="keterampilankhusus" role="tabpanel" aria-labelledby="keterampilankhusus-tab">
                                <div class="table-responsive">
                                    <table class="table table-bordered mt-1">
                                        <thead>
                                            <tr>
                                                <th style="width: 5%;">No</th>
                                                <th>Indikator</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php 
                                                $counter = 6; 
                                                $subCounter = 1; 
                                            @endphp
                                            @foreach ($keterampilanKhususCPL as $item)
                                            <tr>
                                                <td class="fs-15">{{ $counter }}.{{ $subCounter++ }}</td>
                                                @if ($item->indikator)
                                                <td style="text-align: justify;" class="fs-15">{!! $item->indikator !!}</td>
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @if ($kompetensi->first() && $kompetensi->first()->teks)
                            <p class="w-80 xl-w-90 lg-w-100 mx-auto text-muted fs-15" style="text-align: justify;"
                                data-anime='{ "translateY": [20, 0], "opacity": [0,1], "duration": 800, "delay": 200, "easing": "easeOutQuad" }'></p>
                                {!! $kompetensi->first()->teks !!}   
                            </p>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered mt-1">
                                    <thead>
                                        <tr>
                                            <th style="width: 4%;">No</th>
                                            <th>Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php 
                                            $counter = 1;
                                        @endphp
                                        @foreach ($kompetensi as $item)
                                        <tr> 
                                            <td class="fs-15">{{ $counter++ }}</td>
                                            @if ($item->deskripsi)
                                            <td style="text-align: left;" class="fs-15">{!! $item->deskripsi !!}</td>
                                            @endif
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
         <!-- Start Section -->
        <section id="Sasaran" class="mb-0 pb-0">
            <div class="container text-center">
                <div class="card shadow-lg border-0 rounded-3 overflow-hidden" data-anime='{ "opacity": [0,1], "duration": 600, "easing": "easeOutQuad" }'>
                    <div class="card-body p-4">
                        <!-- Judul -->
                        <h5 class="text-dark-gray fw-700" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 100, "easing": "easeOutQuad" }'>Sasaran Kualitas Dosen, Mahasiswa dan Lulusan</h5>

                        <div class="table-responsive">
                            <table class="table table-bordered mt-1" data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">No</th>
                                        <th>Sasaran Kualitas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php 
                                        $counter = 1;
                                    @endphp
                                    @foreach ($sasaranKualitas as $item)
                                    <tr data-anime='{ "opacity": [0,1], "duration": 600, "delay": 200, "easing": "easeOutQuad" }'>
                                        <td class="fs-15">{{ $counter++ }}</td>
                                        @if ($item->deskripsi)
                                        <td class="fs-15" style="text-align: justify;">{!! $item->deskripsi !!}</td>
                                        @endif
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
        <!-- Start Section -->
        <section id="peluang-karir" class="mb-4 pb-0">
            <div class="container text-center">
                <div class="card shadow-lg border-0 rounded-3 overflow-hidden" data-anime='{ "opacity": [0,1], "duration": 600, "easing": "easeOutQuad" }'>
                    <div class="card-body p-4">
                        <!-- Judul -->
                        <h5 class="text-dark-gray fw-700">Tracer Study</h5>

                        <!-- Paragraf -->
                        <p class="w-80 xl-w-90 lg-w-100 mx-auto text-muted fs-15" style="text-align: justify;">
                        Sebagai bagian dari upaya evaluasi dan peningkatan kualitas pendidikan, Program Studi secara berkala melakukan Tracer Study untuk melacak jejak lulusan setelah menyelesaikan pendidikan. Studi ini bertujuan untuk memperoleh informasi mengenai relevansi kurikulum, kompetensi lulusan, dan ketercapaian karier alumni di dunia kerja. Data yang diperoleh dari tracer study menjadi bahan masukan penting dalam pengembangan program studi agar semakin responsif terhadap kebutuhan industri dan masyarakat. Partisipasi alumni dalam kegiatan ini sangat berharga untuk mendorong kemajuan institusi dan menciptakan jejaring profesional yang kuat. Berikut ini adalah hasil dan dokumentasi kegiatan Tracer Study Program Studi:  
                        </p>

                        <!-- Gambar-gambar -->
                        @php
                            $imageCaptions = [
                                1 => 'Waktu Tunggu Lulusan Program Studi S1 - Teknik Informatika',
                                2 => 'Tingkat Kesesuaian Pekerjaan',
                                3 => 'Lingkup Tempat Kerja',
                                4 => 'Survey Kepuasan Pengguna Lulusan Teknik Informatika Universitas Wanita Internasional',
                            ];
                        @endphp
                        <div class="row mt-4">
                            @foreach ($tracerStudy as $item)
                                @for ($i = 1; $i <= 4; $i++)
                                    @php
                                        $field = 'gambar' . $i;
                                    @endphp

                                    @if (! empty($item->$field))
                                        <div class="col-md-6 col-12 mb-4 d-flex flex-column align-items-center">
                                            <img
                                                class="img-fluid w-75 animation-float"
                                                src="{{ asset('storage/' . $item->$field) }}"
                                                alt="Gambar {{ $i }}"
                                                data-anime='{ "effect":"slide", "direction":"lr", "delay":{{ 50 * $i }} }'
                                            >

                                            {{-- Caption otomatis dari map --}}
                                            <p class="mt-2 text-center">
                                                {{ $imageCaptions[$i] }}
                                            </p>
                                        </div>
                                    @endif
                                @endfor
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->
@endsection