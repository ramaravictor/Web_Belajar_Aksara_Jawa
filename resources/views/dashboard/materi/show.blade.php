@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-5">
        <div class="col-lg-10">
            <h1>{{ $post->title }}</h1>
            <a href="/dashboard/materi" class="btn btn-success my-3"><span data-feather="arrow-left"></span> Kembali ke materi</a>
            <a href="/dashboard/materi/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/materi/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><span data-feather="trash-2"></span> Hapus</button>
            </form>
            
            <article class="my-4 fs-5">
                <p> {!! $post->body !!} </p>
            </article>
            @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}"  style="width: 100; height: 100;" alt="gambar">
                
            @else
            <img src="https://source.unsplash.com/1200x300?iqra"  class="card-img-top" alt="gambar">
                
            @endif
        </div>
    </div>
</div>
@endsection
