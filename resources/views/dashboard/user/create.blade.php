@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Buat User baru</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/register" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3 mt-5">
                <h4 for="inputEmail3" class="col-sm-2 col-form-label">Nama</h4>
                <div class="col-sm-10">
                    <input type="text" name="name"
                        class="form-control rounded-top 
                                @error('name') is-invalid @enderror"
                        id="name" placeholder="Name" required autofocus value="{{ old('name'    ) }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <h4 for="inputEmail3" class="col-sm-2 col-form-label">Email</h4>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" placeholder="name@example.com" required autofocus
                        value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <h4 for="inputEmail3" class="col-sm-2 col-form-label">Password</h4>
                <div class="col-sm-10">
                    <input type="password" name="password"
                        class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"
                        placeholder="Password" required autofocus>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <h4 for="inputEmail3" class="col-sm-2 col-form-label">Tipe User</h4>
                <div class="col-sm-10">
                    <input type="is_ustadz" name="is_ustadz" class="form-control @error('is_ustadz') is-invalid @enderror"
                        id="is_ustadz" placeholder="Ketik 1 Untuk Ustadz" required
                        value="{{ old('is_ustadz') }}">
                    @error('is_ustadz')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>


            <button type="submit" class="btn btn-primary mt-5">Buat User</button>
        </form>
    </div>
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
@endsection
