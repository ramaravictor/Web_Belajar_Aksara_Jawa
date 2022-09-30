@extends('layouts.main')

@section('layout')
    <main>
        <div class="container px-5">
            <section class="py-5 text-center">
                <div class="row py-lg-3">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="display-3">Hasil Ujian Siswa</h1>
                    </div>
                </div>
            </section>
            <div class="card mb-5">
                <div class="card-header py-4">
                    <h4 class="fw-light">Nama: {{ auth()->user()->name }}</h4>
                    <div class="card-block py-4">
                        <div class="table-responsive">
                            <table class="table table table-striped table-hover">
                                <thead>
                                    <tr class="table-dark">
                                        <th class="fw-light">No</th>
                                        <th class="fw-light">Soal</th>
                                        <th class="fw-light">Jawaban</th>
                                        <th class="fw-light">tgl_menjawab</th>
                                        <th class="fw-light">Guru</th>
                                        <th class="fw-light">Nilai</th>
                                        <th class="fw-light">Kompetensi</th>
                                        <th class="fw-light">tgl_dinilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($nilai as $nilai)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{ asset('storage/' . $nilai->soal->image) }}" width='80'
                                                    height=''></td>
                                            <td>
                                                <img src="{{ $nilai->jawab_image }}" width='80' height=''>
                                            </td>
                                            <td>{{ $nilai->created_at }}</td>
                                            <td>{{ $nilai->guru }}</td>
                                            <td>{{ $nilai->nilai }}</td>
                                            <td>{{ $nilai->kompetensi }}</td>
                                            <td>{{ $nilai->updated_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
