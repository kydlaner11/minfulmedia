<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/css/home.css">
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
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle warna3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown button
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/recruitments">Admin</a></li>
            </ul>
        </div>
    </nav> -->

    <!-- banner
    <div class="container-fluid banner d-flex align-items-center">
        <div class="container text-white">
            <h1>Mindfull</h1>
            <div class="col-md-8 offset-md-2">
            </div>
        </div>
    </div> -->

    <!-- body -->
    <section class="about">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-15">
                    <h3 class="text-center mb-3">Karyawan yang Masuk</h3><br><br>
                    <!-- <a href="{{ route('recruitments.create') }}" class="btn btn-primary">Create</a><br><br> -->
                    <a href="/recruitments/cetakpdf" class="btn btn-primary" target="_blank">Print PDF</a>
                    <a href="/recruitments/export_excel" class="btn btn-success my-3" target="_blank">Print EXCEL</a><br><br>
                    <div class="row">
                    @foreach ($recruitments as $recruitment)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="image-box">
                                    <img src="{{ url('/image/'.$recruitment->image) }}" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $recruitment->name }}</h5>
                                    <p class="card-text text-truncate">{{ $recruitment->email }}</p>
                                    <p class="card-text text-truncate">{{ $recruitment->address }}</p>
                                    <p class="card-text text-truncate">{{ $recruitment->description }}</p>
                                    <a href="{{ route('recruitments.edit', $recruitment) }}" class="btn btn-primary" role="button" aria-disabled="true">Detail</a><br><br>
                                    <form action="{{ route('recruitments.destroy', $recruitment) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form> 
                                </div>
                            </div> 
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

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