@extends('layouts.app')

<link rel="stylesheet" href="assets/plugins/flickity/flickity.min.css" />
<link rel="stylesheet" href="assets/css/carousel.css">

@section('content')
<section style="height: 200px;">
    <!-- Carousel -->
    <div class="carousel-ads mt-3">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/contoh_banner.jpg') }}" class="carousel-img rounded" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/contoh_banner.jpg') }}" class="carousel-img rounded" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/contoh2.jpeg') }}" class="carousel-img rounded" alt="..." />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden=" true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
</section>
<section style="padding: 90px 0;">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col">
            <h1>Asosiasi Robotik Edukasi Indonesia</h1>
            <p>Dalam menunjang pendidikan teknik sejak usia dini secara lebih konstruktif dan berkesinambungan, maka
                diperlukan suatu
                ekosistem pendidikan teknik bidang robotika yang kondusif secara menyeluruh pada seluruh stakeholder, di
                antaranya
                institusi pendidikan, guru, orang tua, siswa, perusahaan yang bergerak di bidang pendidikan, dan
                instansi-instansi
                terkait lainnya.
                Maka dibentuklah sebuah asosiasi dengan nama "Asosisasi Robot Edukasi Indonesia" yang disingkat menjadi
                "AREI".</p>
        </div>
        <div class="col d-flex justify-content-center">
            <img src="assets/img/logo-name.png" alt="logo_arei_home" class="carousel-img">
        </div>
    </div>
</section>
<section>
    <h2 class="text-center">Berita AREI</h2>
    <div class="container-news mt-5">
        <div class="gallery js-flickity" data-flickity='{ "cellAlign": "left" }'>
            {{-- @if(!empty($data_company)) @foreach($data_company as $company) --}}
            <a href="/">
                <div class="gallery-cell">
                    <div class="card">
                        <img class="img-news" src="assets/img/logo_arei.png" alt="" />
                        <h1>TEST</h1>
                    </div>
                </div>
            </a>
            <a href="/">
                <div class="gallery-cell">
                    <div class="card">
                        <img class="img-news" src="assets/img/logo_arei.png" alt="" />
                        <h1>TEST</h1>
                    </div>
                </div>
            </a>
            <a href="/">
                <div class="gallery-cell">
                    <div class="card">
                        <img class="img-news" src="assets/img/logo_arei.png" alt="" />
                        <h1>TEST</h1>
                    </div>
                </div>
            </a>
            <a href="/">
                <div class="gallery-cell">
                    <div class="card">
                        <img class="img-news" src="assets/img/logo_arei.png" alt="" />
                        <h1>TEST</h1>
                    </div>
                </div>
            </a>
            <a href="/">
                <div class="gallery-cell">
                    <div class="card">
                        <img class="img-news" src="assets/img/logo_arei.png" alt="" />
                        <h1>TEST</h1>
                    </div>
                </div>
            </a>
            <a href="/">
                <div class="gallery-cell">
                    <div class="card">
                        <img class="img-news" src="assets/img/logo_arei.png" alt="" />
                        <h1>TEST</h1>
                    </div>
                </div>
            </a>
            <a href="/">
                <div class="gallery-cell">
                    <div class="card">
                        <img class="img-news" src="assets/img/logo_arei.png" alt="" />
                        <h1>TEST</h1>
                    </div>
                </div>
            </a>

            {{-- @endforeach @endif --}}
        </div>
    </div>
</section>
@endsection @section('script')
<script src="{{ asset('assets/plugins/flickity/flickity.min.js') }}"></script>

@endsection