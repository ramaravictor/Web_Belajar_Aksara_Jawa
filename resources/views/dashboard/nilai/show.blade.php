@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-12">
                <h1>Penilaian hasil ujian santri</h1>
                <a href="/dashboard/nilai" class="btn btn-success my-3"><span data-feather="arrow-left"></span> Kembali ke
                    nilai</a>
                <a href="/dashboard/nilai/{{ $nilai->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                    Edit</a>
                <form action="/dashboard/nilai/{{ $nilai->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><span
                            data-feather="trash-2"></span> Hapus</button>
                </form>

                <article class="my-4 fs-5">
                    <h2>Nama Santri : {!! $nilai->user->name !!} </h2>
                    <h2>Soal : {!! $nilai->soal->body !!} </h2>
                    <h2>Jawaban : </h2>
                    <img src="{{ $nilai->jawab_image }}" width='500' height='300'>
                    <h2>Nilai : {!! $nilai->nilai !!} </h2>
                    <h2>Kompetensi : {!! $nilai->kompetensi !!} </h2>
                    <h2>Ustadz : {!! $nilai->ustadz !!} </h2>
                </article>
            </div>
        </div>
    </div>
@endsection
