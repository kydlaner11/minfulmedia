<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/css/form.css">
</head>
<body>
    @include('sweetalert::alert')
    @extends('layouts.app')
    @section('content')

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- navbar
    <nav class="navbar navbar-expand-lg navbar-dark warna5">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-4 mt-1">
                        <img src="/image/logoblue.png" style="width: 30px;" alt="">
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="/projects">Job</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="/forms">Forms</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="/faq">FAQ</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="/recruitments/create">Recruitments</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->

    <!-- banner
    <div class="container-fluid banner d-flex align-items-center">
        <div class="container text-white">
            <h1>Izumi</h1>
            <div class="col-md-8 offset-md-2">
            </div>
        </div>
    </div> -->

    <!-- baru -->
    <section class="about">
        <div class="container">
            <div class="mt-5">
                <div class=" mb-5">
                <form action="{{ route('recruitments.store') }}" method="POST">
                @csrf
                    <h2 style="color: white;">Biodata</h2><br>
                    <div>
                        <!-- <label for="name">Name:</label> -->
                        <input type="text" id="name" name="name" class="form-control"  placeholder="Masukkan Nama" required autofocus autocomplete="off"><br>
                        <input type="text" id="email" name="email" class="form-control"  placeholder="Masukkan Email" required autofocus autocomplete="off"><br>
                        <input type="text" id="address" name="address" class="form-control"  placeholder="Masukkan Alamat" required autofocus autocomplete="off"><br>
                    </div>
                    <h2 style="color: white;">Dokumentasi</h2><br>
                    <div>
                        <input type="file" name="image" id="image" class="form-control" required>
                    </div><br>
                    <!-- <input type="text" name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Masukkan Alasan Mengapa Memilih Kami"> -->
                    <textarea rows="5" cols="33" name="description" id="description" class="form-control" placeholder="Masukkan alasan ingin bergabung dengan kami dan divisi yang diinginkan"></textarea><br>
                    <!-- {{-- Message --}}
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <strong>Success !</strong> {{ session('success') }}
                        </div>
                    @endif -->
                    <button class="send"><a style="text-decoration: none; color: white;">Send</a></button>
                </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer
    <div class="container-fluid py-5 warna5 text-light">
        <div class="container d-flex justify-content-between">
            <label>Follow us:</label>
                <div class="col-sm-1 d-flex justify-content-center mb-2">
                    <a class="link" href="https://www.instagram.com/izumiidesu/?hl=id"><i class="fab fa-instagram fs-2"></i></a>
                </div>
                <div class="col-sm-1 d-flex justify-content-center mb-2">
                    <a class="link" href="https://www.instagram.com/izumiidesu/?hl=id"><i class="fab fa-twitter fs-2"></i></a>
                </div>
                <div class="col-sm-1 d-flex justify-content-center mb-2">
                    <a class="link" href="https://www.instagram.com/izumiidesu/?hl=id"><i class="fab fa-whatsapp fs-2"></i></a>
                </div>
            <label>&copy;Izumiidesu</label>
        </div>
    </div> -->

    @endsection
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
    <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min
    .js"
    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi
    12/QExE" crossorigin="anonymous"></script>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.
    min.js"
    integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9U
    oXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>