@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-5">
        <div class="col-lg-10">
            <a href="/dashboard/soal" class="btn btn-success my-3"><span data-feather="arrow-left"></span> Kembali ke soal</a>
            <a href="/dashboard/soal/{{ $soal->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/soal/{{ $soal->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><span data-feather="trash-2"></span> Hapus</button>
            </form>
            <h1>{{ $soal->title }}</h1>
            <article class="my-4 fs-5">
                <h2> {!! $soal->body !!} </h2>
            </article>

            @if ($soal->image)
            <img src="{{ asset('storage/' . $soal->image) }}"  class="card-img-top" alt="gambar">
                
            @else
            <img src="https://source.unsplash.com/1200x300?iqra"  class="card-img-top" alt="gambar">
                
            @endif
        </div>
    </div>
</div>
@endsection
