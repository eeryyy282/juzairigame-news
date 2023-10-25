<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul')</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
  <div class="container">  
  <!-- Top Bar Utama -->
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <!-- logo website -->
                <img src="{{url('assets/img/Logo Juzairi Game Store BG Hitam.png')}}" style="width: 60px; height: 60px; flex-shrink: 0;">
                <!-- judul website -->
                <a class="navbar-brand" href="#">Juzairi Game News</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('')}}">Beranda</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Forum</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Lainnya
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Populer Hari Ini</a></li>
                        <li><a class="dropdown-item" href="#">Pengguna Ter-Suhu!</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Tentang SAYA!</a></li>
                    </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Cari sesuatu di sini.." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Cari</button>
                </form>
                &nbsp;
                @guest
                <div style="margin: 2px; padding: 2px">
                <!-- register -->
                Belum memiliki akun? <br> <a href="/register" class="link-danger">Daftar Sekarang!</a>
                </div>
                <!-- login -->
                <div style="margin: 10px; padding: 2px">
                <a href="/login"><button type="button" class="btn btn-outline-primary">MASUK</button></a>
                @endguest
                @auth
                <!-- dashboard -->
                <a href="/dashboard" class="link-danger">Dashboard</a>
                </div>
                <!-- Logout -->
                <div style="margin: 10px; padding: 2px">
                <a href="/logout"><button type="button" class="btn btn-outline-primary">Keluar</button></a>
                @endauth
                 </div>
                 </div>
            </div>
            </nav>
        </div>
    </div>
  </div>

    <!-- container -->
    <div class="container">
        @yield('konten')
    </div>

    <footer style="margin-top: 150px;">
        <hr>
        Copyright &copy; 2023 | Juzairi Game News
    </footer>

    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>