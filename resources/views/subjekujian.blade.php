@extends('layouts.main')

@section('layout')
    <main>
        <section class=" py-5 text-center">
            <div class="row py-lg-3">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="display-3">Kategori Soal ujian</h1>
                </div>
            </div>
        </section>
        <div class="container px-5">
        <div class="container px-5">
        <div class="container px-5">
        <div class="container px-5">
            <div class="album pb-5 ">
                <div class="row g-5">
                    @foreach ($ujian as $kategori)
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="/img/cover.png" class="bd-placeholder-img card-img-top" width="100%"
                                    height="100%">

                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h2 class="fw-light"><a href="/ujian/{{ $kategori->slug }}"
                                                class="text-decoration-none text-dark">{{ $kategori->kategori }}</a>
                                        </h2>
                                        {{-- <small class="text-muted">{{ $kategori->created_at->diffForHumans() }}</small> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
