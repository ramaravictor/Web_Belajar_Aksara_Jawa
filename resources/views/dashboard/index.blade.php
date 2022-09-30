@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Selamat datang di dashboard, {{ auth()->user()->name }}</h1>
    </div>


    <div class="row row-cols-1 row-cols-md-2 g-5">
        <div class="col">
            <div class="h-100 p-3 text-white bg-success rounded-3">
                <h2 class="card-title">Materi</h2>
                <h2 class="card-text">{{ App\Models\materi::count() ?? '0' }}</h2>
                <p class="card-text">Last updated 3 mins ago</p>
                <a href="/dashboard/materi" class="btn btn-secondary">Selengkapnya &raquo;</a>
            </div>
        </div>

        <div class="col">
            <div class="h-100 p-3 text-white bg-primary rounded-3">
                <h2 class="card-title">Soal Ujian</h2>
                <h2 class="card-text">{{ App\Models\soal::count() ?? '0' }}</h2>
                <p class="card-text">Last updated 3 mins ago</p>
                <a href="/dashboard/soal" class="btn btn-secondary">Selengkapnya &raquo;</a>
            </div>
        </div>
        <div class="col">
            <div class="h-100 p-3 text-white bg-warning  rounded-3">
                <h2 class="card-title">Nilai</h2>
                <h2 class="card-text">{{ App\Models\nilai::count() ?? '0' }}</h2>
                <p class="card-text">Last updated 3 mins ago</p>
                <a href="/dashboard/nilai" class="btn btn-secondary">Selengkapnya &raquo;</a>
            </div>
        </div>
        <div class="col">
            <div class="h-100 p-3 text-white bg-danger rounded-3">
                <h2 class="card-title">User</h2>
                <h2 class="card-text">{{ App\Models\user::count() ?? '0' }}</h2>
                <p class="card-text">Last updated 3 mins ago</p>
                <a href="/dashboard/user" class="btn btn-secondary">Selengkapnya &raquo;</a>
            </div>
        </div>
    </div>
@endsection
