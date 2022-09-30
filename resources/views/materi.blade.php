@extends('layouts.main')

@section('layout')

    <body class="bg-light">
        <div class="container">
            <section class="py-5 text-center container">
                <div class="row py-lg-3">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="display-3 mb-4">Materi Pembelajaran</h1>
                        <h3 class="fw-light">“Ing ngarsa sung tulada, ing madya mangun karsa, tut wuri handayani ”</h3>
                        <p class="lead text-muted">– Ki Hajar Dewantara –</p>
                    </div>
                </div>
            </section>

            {{-- card model materi --}}
            <div class="d-flex justify-content-center align-items-center">
                {{-- mengambil data tadi tabel materi --}}
                <div class="row d-flex justify-content-center align-items-center ">
                    @foreach ($materi as $materi)
                        <div class="col-4 g-5">
                            <div class="row bg-dark me-md-3 pt-3 pt-md-5 px-md-5 text-center text-white overflow-hidden"
                                style="border-radius: 21px 21px 0 0;">
                                <div class="py-3 mb-3">
                                    <h2 class="fw-light"><a href="/materi/{{ $materi->slug }}"
                                            class="text-decoration-none text-light">{{ $materi->title }}</a></h2>

                                </div>
                                <div>
                                    <img src="/img/cover.png" class=" mx-auto"
                                        style="width: 100%; height: 100%; border-radius: 21px 21px 0 0;">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
    </body>
@endsection
