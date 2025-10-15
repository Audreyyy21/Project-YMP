@extends('layouts.app') 
@section('content')
<section id="program" class="program-hero ">

    <div class="container">

        <div class="mb-4">
            <span class="d-inline-block fw-bold text-white py-2 px-4 section-title-pill">
                Program dan Layanan Edutech
            </span>
        </div>

        <div class="horizontal-scroll-container">
    
    <div class="d-flex align-items-center gap-5">
        <a href="#" class="btn-arrow me-15">
            <i class="fas fa-arrow-left"></i>
        </a>
        <a href="#" class="btn btn-custom-gold">Konsultasi Akademik</a>
        <a href="#" class="btn btn-custom-gold">Bimbingan Belajar Online</a>
        <a href="#" class="btn btn-custom-gold">Bimbingan Belajar Offline</a>
        <a href="#" class="btn btn-custom-gold">Project Program</a>
        <a href="#" class="btn btn-custom-gold">Komunitas Cyber</a>
        <a href="#" class="btn btn-custom-gold">Internship/Magang</a>
        <a href="#" class="btn btn-custom-gold">Boothcamp Class</a>
        <a href="#" class="btn btn-custom-gold">Produk Yuk-mari</a>
    </div>

</div>

    </div>
</section>

<section id="promo-course" class="promo-section">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="fw-bold mb-3" style="color: #b18b2f;">Yuk, nikmati promo spesial dari Yuk-Mari Course!</h2>

                <div class="d-flex justify-content-start gap-3 mb-4">
                    <div class="placeholder-box"></div>
                    <div class="placeholder-box"></div>
                    <div class="placeholder-box"></div>
                    <div class="placeholder-box"></div>
                </div>

                <p class="text-secondary" style="font-size: 1.1rem;">
                    Ada diskon keren buat kamu yang mau upgrade skill bareng kami. Semua info course dan materi belajarnya bisa kamu intip langsung di halaman course!
                </p>
            </div>

            <div class="col-lg-6">
                <div class="promo-card w-75 mx-auto">
                    <h5 class="fw-bold">Bootcamp 3</h5>
                    <p class="text-muted mb-2" style="font-size: 1.1rem;">Blue Team Operation</p>
                     
                    <p class="mb-3">
                        <span class="price-original">Harga: Rp3.200.000</span>
                        <span class="price-new">Rp159.000</span>
                    </p>

                    <img src="{{ asset('images/bc3.jpg') }}" class="img-fluid rounded mb-3 w-75 d-block mx-auto" alt="Cyber Security Bootcamp">                    
                    <div class="description-wrapper mb-3">
                        <p class="text-dark small mb-0">
                            <strong>Bootcamp 3 - Blue Teaming Operation</strong> merupakan Bootcamp yang diselenggarakan pada Bulan Mei 2025. Dapatkan Module lengkapnya + Rekaman Video yang bisa dipelari kapan saja dalam mempelajari strategi simulasi Blue Team.
                        </p>
                       
                </div>
                    <div class="d-grid">
                        <a href="#" class="btn btn-custom-gold text-center">Beli Sekarang</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

