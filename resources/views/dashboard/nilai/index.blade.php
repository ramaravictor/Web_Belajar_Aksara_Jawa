@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Penilaian</h1>
    </div>

    <div class="table-responsive col-lg-12">
        {{-- <a href="/dashboard/nilai/create" class="btn btn-success mb-4">Tambahkan Penilaian</a> --}}
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Santri</th>
                    <th scope="col">Soal</th>
                    <th scope="col">Jawaban</th>
                    <th scope="col">tgl_menjawab</th>
                    <th scope="col">Ustadz</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Kompetensi</th>
                    <th scope="col">tgl_dinilai</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nilai as $nilai)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{!! $nilai->user->name !!}</td>
                        <td>
                            @if ($nilai->soal)
                                <img src="{{ asset('storage/' . $nilai->soal->image) }}" width='80' height=''>
                            @else
                                <img src="https://source.unsplash.com/80x30?iqra" class="card-img-top" alt="Soal">
                            @endif
                        </td>
                        {{-- <td>{!! $nilai->soal->body !!}</td> --}}
                        <td><img src="{{ $nilai->jawab_image }}" width='80' height=''></td>
                        <td>{{ $nilai->created_at }}</td>
                        <td>{{ $nilai->ustadz }}</td>
                        <td>{{ $nilai->nilai }}</td>
                        <td>{{ $nilai->kompetensi }}</td>
                        <td>{{ $nilai->updated_at }}</td>

                        <td>
                            <a href="/dashboard/nilai/{{ $nilai->id }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/dashboard/nilai/{{ $nilai->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                            <form action="/dashboard/nilai/{{ $nilai->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Anda yakin ingin menghapus data ini?')"><span
                                        data-feather="trash-2"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
