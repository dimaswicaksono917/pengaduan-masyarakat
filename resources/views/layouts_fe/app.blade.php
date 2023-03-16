<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengaduan Masyarakat</title>
    <link rel="stylesheet" href="{{asset('assets/css/landing.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome/css/solid.min.css')}}">
</head>
<body>
    {{-- nav --}}
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Pentung</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="{{route('landing')}}">Home</a>
                    <a class="nav-link" href="{{route('masyarakatpengaduan')}}">Buat Pengaduan</a>
                    <a class="nav-link" href="{{route('masyarakatpengaduanku')}}">Pengaduanku</a>
                    @if (Auth::check())
                    <a href="{{route('logout')}}">
                        <button class="btn-solid">Logout</button>
                    </a>
                    @else
                    <a href="{{route('login')}}">
                        <button class="btn-solid">Login</button>
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </nav>
{{-- end nav --}}
    @yield('content')

    <section class="footer bg-green">
        <footer class="text-center">
            <h4 class="text-white">Copyright Dimas Wicaksono | SMK Wikrama Bogor</h4>
        </footer>
    </section>



    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/fontawesome/js/all.min.js')}}"></script>
</body>
</html>
