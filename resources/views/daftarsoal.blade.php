<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Custom styles for this template -->
    <link href="/css/carousel.css" rel="stylesheet">

    <title>AksaraJawa | {{ $title }}</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/img/logoaksa.png" alt="..." height="30" width="200">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $active === 'materi' ? 'active' : '' }}" href="/materi">Materi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $active === 'ujian' ? 'active' : '' }}" href="/ujian">Ujian
                                Menulis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $active === 'nilai' ? 'active' : '' }}" href="/nilai">Nilai</a>
                        </li>
                    </ul>
                    <div class="d-flex gap-5 justify-content-center" id="dropdownMacos">
                        <ul class="navbar-nav ms-auto">
                            @auth
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Assalamualaikum, {{ auth()->user()->name }}
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-macos mx-0 border-0 shadow mx-2 mt-2"
                                        style="width: 100px;">
                                        @can('admin')
                                            <li><a class="dropdown-item" href="/dashboard"><i
                                                        class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                        @endcan
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button type="submit" class="dropdown-item"><i
                                                    class="bi bi-box-arrow-right"></i>
                                                Keluar</button>
                                        </form>

                                    </ul>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link {{ $active === 'login' ? 'active' : '' }}" href="/login"><i
                                            class="bi bi-box-arrow-right"></i> Masuk</a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <h1 class="display-5 my-5">Daftar Soal Ujian: {{ $kategori }}</h1>
            
            @foreach ($soal as $soal)
                <div class="card mb-2">
                    <div class="card-body mx-5">
                        <div class="row">
                            <div class="col">
                                <h2 class="card-title">
                                    <a href="/soalujian/{{ $soal->id }}"
                                        class="fw-light text-decoration-none text-dark">{{ $soal->title }}</a>
                                </h2>
                            </div>
                            <div class="col", align="right" >
                                <button class="btn btn-primary"><a href="/soalujian/{{ $soal->id }}" class="text-decoration-none text-light">Jawab</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
    
        </div>
    </main>
</body>
</html>