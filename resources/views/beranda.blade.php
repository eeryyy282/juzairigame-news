@extends('master')
@section('judul', 'beranda berita')

@section('konten')
    <div class="row">
            <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <!-- slider pertama -->
            <img src="{{url('assets/img/Desain tanpa judul.png')}}" class="d-block w-100" alt="..."  id="container_image">
            <div class="carousel-caption d-none d-md-block">
                <h5>PUSAT BERITA GAME TERPOPULER</h5>
                <p>Dapatkan informasi seputar GAME ter-update di sini!</p>
            </div>
            </div>
            <div class="carousel-item">
            <!-- slide kedua -->
            <img src="{{url('assets/img/abcd.png')}}" class="d-block w-100" alt="..." >
            <div class="carousel-caption d-none d-md-block">
                <h5>KEPOIN SEMUA TENTANG GAME DI SINI!</h5>
                <p>Mulai dari action, horror, sampai MMORPG ada di sini!</p>
            </div>
            </div>
            <div class="carousel-item">
            <!-- slide ketiga -->
            <img src="{{url('assets/img/abcde.png')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>BAGIKAN PENGETAHUANMU DI FORUM</h5>
                <p>Sesepuh jangan pernah berdiam diri saja! Bagikan pengetahuanmu dan diskusikan di forum!</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>
    </div>
&nbsp;

<div class="container">
    <!-- postingan card -->
    <div class="row" style="size: 400px;">
            <div class="card" style="width: 16rem; margin-left: 25px; margin-right:41.7px">
                <img src="{{url('assets/img/berita1.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Game Bertahan Hidup Terbaik April 2023</h5>
                    <p class="card-text">Berikut merupakan game bertahan hidup terbaik bulan April tahun 2023 terbaik!</p>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
            <div class="card" style="width: 16rem; margin-right:41.7px">
                <img src="{{url('assets/img/forzahorizon5-keyart-vert-rgb-final-1629720353.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Forza Horizon 5 Menjadi Game Bapalapan Termahal?</h5>
                    <p class="card-text" id="text-dalam-box">Beberapa bulan setelah diluncurkannya trailer resmi dari Xbox, benarkah Forza Horizon 5 menjadi game balapan termahal?</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 16rem; margin-right:41.7px">
                <img src="{{url('assets/img/forzahorizon5-keyart-vert-rgb-final-1629720353.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card" style="width: 16rem; margin-right:41.7px;">
                <img src="{{url('assets/img/forzahorizon5-keyart-vert-rgb-final-1629720353.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
    </div>
</div>
@endsection