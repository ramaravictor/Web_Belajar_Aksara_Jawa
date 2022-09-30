@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kumpulan Soal</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8 alert-dismissible fade show text-center" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/soal/create" class="btn btn-success mb-4">Tulis Soal Baru</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Soal</th>
                    <th scope="col">Text</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($soal as $soal)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $soal->kategori->jilid }}</td>
                        <td>{{ $soal->title }}</td>
                        <td>{!! $soal->body !!}</td>
                        <td><img src="{{ asset('storage/' . $soal->image) }}" width='80' height=''></td>
                        <td>
                            <a href="/dashboard/soal/{{ $soal->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
                            <a href="/dashboard/soal/{{ $soal->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                            <form action="/dashboard/soal/{{ $soal->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><span data-feather="trash-2"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
