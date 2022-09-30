@extends('layouts.main')

@section('layout')
    <body>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <img src="/img/cvr.jpg">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1 class="display-3 text-light"><strong>Sinau</strong></h1>
                            <h1 class="display-3 text-light"><strong>Aksara Jawa</strong></h1>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <img src="/img/quran (5).jpg">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Materi Pembelajaran</h1>
                            <p>Bentuk bahan pembelajaran untuk membantu guru dan siswa dalam
                                kegiatan belajar mengajar yang disusun secara sistematis dalam rangka memenuhi standar
                                kompetensi yang ditetapkan.</p>
                            <p><a href="/kategorimateri" class="btn btn-primary">Selengkapnya &raquo;</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <img src="/img/quran (3).jpg">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Daftar nilai</h1>
                            <p>Daftar hasil uji kompetensi dan belajar siswa</p>
                            <p><a href="/nilai" class="btn btn-primary">Selengkapnya &raquo;</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- Marketing messaging and featurettes================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
            <div class="container marketing">
                <!-- Three columns of text below the carousel -->
                <div class="row">
                    <div class="col-lg-4">
                        <img src="/img/materi.png" class="bd-placeholder-img rounded-circle" width="140" height="140"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                            preserveAspectRatio="xMidYMid slice" focusable="false">

                        <h2>Materi</h2>
                        <p>Halaman pembelajaran</p>
                        <p><a href="/materi" class="btn btn-secondary">Selengkapnya &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img src="/img/soal.png" class="bd-placeholder-img rounded-circle" width="140" height="140"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                            preserveAspectRatio="xMidYMid slice" focusable="false">

                        <h2>Ujian Menulis</h2>
                        <p>Uji kompetensi penulisan huruf arab</p>
                        <p><a href="/ujian" class="btn btn-secondary">Selengkapnya &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img src="/img/nilai.png" class="bd-placeholder-img rounded-circle" width="140"
                            height="140" xmlns="http://www.w3.org/2000/svg" role="img"
                            aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">

                        <h2>Nilai</h2>
                        <p>Laporan hasil belajar santri</p>
                        <p><a href="/nilai" class="btn btn-secondary">Selengkapnya &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
    </body>
@endsection


<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
