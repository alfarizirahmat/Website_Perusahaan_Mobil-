@extends('layout.app')

@section('content')
<div class="container">

    <div class="px-4 py-5 my-5 text-center position-relative" data-aos="zoom-in" style="background-image: url('{{ asset('images/angkotttt.jpg') }}'); background-size: cover; background-position: center; height: 400px;">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.6);"></div>
            <div class="position-relative z-1">
                <h1 class="display-2 fw-bold text-white">ZILIO GROUP</h1>
                    <h4 class="lead text-light mb-4 fw-bold">Layanan sewa dan beli kendaraan yang selalu siap melayani Anda.</h4>
                        @if(Auth::user()->role === 'admin')
                            <a href="/dashboard" onclick="showContent('dashboard')" class="btn btn-outline-light btn-lg px-5">Dashboard</a>
                        @endif
                    </div>
                </div>

                <div class="container py-5">
                    <div class="row">
                        <div class="col-lg-6 mb-4" data-aos="fade-right">
                            <div class="card h-100 text-bg-dark shadow-lg" style="background-image: url('{{ asset('images/Gambar Foto Mobil Angkot.jpg') }}'); background-size: cover;">
                                <div class="card-body p-4 d-flex flex-column justify-content-end" style="background-color: rgba(0, 0, 0, 0.6); background-size: cover;">
                                    <h3 class="fw-bold text-white">Galeri Foto</h3>
                                <p class="text-light fw-bold">Kumpulan foto-foto kendaraan dan layanan kami.</p>
                            <a href="/photos" class="btn btn-outline-light mt-3">Lihat Galeri</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4" data-aos="fade-left">
                    <div class="card h-100 text-bg-dark shadow-lg" style="background-image: url('{{ asset('images/lambo.jpg') }}'); background-size: cover;">
                        <div class="card-body p-4 d-flex flex-column justify-content-end" style="background-color: rgba(0, 0, 0, 0.6); background-size: cover;">
                            <h3 class="fw-bold text-white">Artikel Terbaru</h3>
                            <p class="text-light fw-bold">Berita dan informasi terbaru seputar layanan kami.</p>
                            <a href="/artikel" class="btn btn-outline-light mt-3">Baca Artikel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container col-xl-10 col-xxl-8 px-4 py-5 ">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start" data-aos="fade-right" >
                    <h1 class="display-4 fw-bold lh-1 text-white mb-3">company president director</h1>
                        <p class="col-lg-10 fs-4 text-secondary">This creation is based on developing features that the creator wants to continue to work on in order to achieve </p>
                        </div>
                            <div data-aos="fade-left" class="col-md-10 mx-auto col-lg-5 card card-cover text-bg-dark h-100 overflow-hidden rounded-4 shadow-lg" style="background-image: url({{ asset('images/45CF0365-984C-4FD0-ACFD-EDE1BDD91235.jpeg') }})">
                                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                    <li class="d-flex align-items-right">
                                        <small>XII RPL 1</small>
                                    </li>
                                <h3 class="pt-5 mt-3 mb-1 display-6 lh-1 fw-bold">Alfarizi Rasulludin Rahmat</h3>
                            <ul class="d-flex list-unstyled mt-auto">
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container px-4 py-5" id="hanging-icons" data-aos="fade-up">
            <h2 class="pb-3 border-bottom text-center text-white">Kendaraan Terbaru</h2>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            
                <div class="col">
                    <div class="card bg-dark text-white border-0 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-image position-relative">
                            <img src="{{ asset('images/biss.jpg') }}" class="card-img-top img-fluid" alt="Kendaraan 1" style="height: 250px; object-fit: cover;">
                                <div class="card-img-overlay d-flex flex-column justify-content-end p-3" style="background: rgba(0, 0, 0, 0.5);">
                                    <h5 class="card-title">Bis</h5>
                                        </div>
                                    </div>
                                <div class="card-footer bg-transparent border-top-0 text-center py-3">
                            <a href="/photos" class="btn btn-outline-light">Lihat Detail</a>
                        </div>
                    </div>
                </div>
    
                <div class="col">
                    <div class="card bg-dark text-white border-0 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-image position-relative">
                            <img src="{{ asset('images/lambo.jpg') }}" class="card-img-top img-fluid" alt="Kendaraan 2" style="height: 250px; object-fit: cover;">
                            <div class="card-img-overlay d-flex flex-column justify-content-end p-3" style="background: rgba(0, 0, 0, 0.5);">
                                <h5 class="card-title">Lambozilio</h5>
                                        </div>
                                    </div>
                                <div class="card-footer bg-transparent border-top-0 text-center py-3">
                            <a href="/photos" class="btn btn-outline-light">Lihat Detail</a>
                        </div>
                    </div>
                </div>
    
                <div class="col">
                    <div class="card bg-dark text-white border-0 shadow-lg" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-image position-relative">
                            <img src="{{ asset('images/R.jfif') }}" class="card-img-top img-fluid" alt="Kendaraan 3" style="height: 250px; object-fit: cover;">
                                <div class="card-img-overlay d-flex flex-column justify-content-end p-3" style="background: rgba(0, 0, 0, 0.5);">
                                    <h5 class="card-title">Avanzilio</h5>
                                            </div>
                                            </div>
                                        <div class="card-footer bg-transparent border-top-0 text-center py-3">
                                    <a href="/photos" class="btn btn-outline-light">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="container py-5">
                    <h2 class="text-center text-white mb-4" data-aos="fade-up">Kontak Kami</h2>
                        <div class="row justify-content-center">
                            <div class="col-md-8" data-aos="fade-up">
                                <div class="card shadow-lg" style="background-color: rgb(51, 51, 51);">
                                    <div class="card-body text-white">
                                        <h5 class="card-title">Hubungi Kami</h5>
                                    <p class="card-text">Alamat: Griya asri Purwakarta</p>
                                <p class="card-text">Telepon: +62 896=3961-7233</p>
                            <p class="card-text">Email: Alfarizirahmat@gmail.com</p>
                        <a href="/contact" class="btn btn-outline-light">Kirim Pesan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
