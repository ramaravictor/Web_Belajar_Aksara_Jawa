@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambahkan Penilaian</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/nilai/{{ $nilai->id }}" class="mb-5">
            @method('put')
            @csrf
            <div class="row mb-3">
                <h4 for="inputEmail3" class="col-sm-2 col-form-label">Nama Santri</h4>
                <div class="col-sm-10">
                    <input class="form-control" value="{!! $nilai->user->name !!}">
                </div>
            </div>

            <div class="row mb-3">
                <h4 for="inputEmail3" class="col-sm-2 col-form-label">Soal</h4>
                <div class="col-sm-10">
                    <div class="h-100 border rounded-3">
                        <label class="col-form-label mx-2"> {!!  $nilai->soal->body !!} </label>
                    </div>
                   
                    {{-- <input class="form-control" value="{{ old('soal', $nilai->soal->body) }}"> --}}
                </div>
            </div>
            <div class="row mb-3">
                <h4 for="inputEmail3" class="col-sm-2 col-form-label">Jawaban</h4>
                <div class="col-sm-10">

                    <div class="row align-items-md-stretch">
                        <div class="col-md-6">
                            <div class="h-100 border rounded-3 text-center">
                                <img src="{{ $nilai->jawab_image }}" width='300' height='200'>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="h-100 border rounded-3 text-center">
                                <img src="{{ asset('storage/' . $nilai->soal->image) }}" width='300' height='200'>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <h4 for="ustadz" class="col-sm-2 col-form-label">Ustadz Penilai</h4>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('ustadz') is-invalid @enderror" id="ustadz"
                        name="ustadz"  value="{{ auth()->user()->name }}">
                    @error('ustadz')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <h4 for="nilai" class="col-sm-2 col-form-label">Nilai</h4>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('nilai') is-invalid @enderror" id="nilai"
                        name="nilai" required autofocus value="{{ old('nilai', $nilai->nilai) }}">
                    @error('nilai')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <fieldset class="row mb-3">
                <h4 class="col-form-label col-sm-2 pt-0">Kompetensi</h4>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kompetensi" value="LULUS"
                            {{ $nilai->kompetensi == 'LULUS' ? 'checked' : '' }}>LULUS</option>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kompetensi" value="TIDAK LULUS"
                            {{ $nilai->kompetensi == 'TIDAK LULUS' ? 'checked' : '' }}>TIDAK LULUS</option>
                    </div>
                </div>
            </fieldset>
            <div class="text-center pb-5">
                <a href="/dashboard/nilai" class="btn btn-danger my-3"> Batal </a>
                <button type="submit" class="btn btn-primary my-5">Update Nilai</button>
            </div>


        </form>
    </div>
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
@endsection
