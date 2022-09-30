@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar User</h1>
    </div>

    <div class="table-responsive col-lg-8">
        {{-- <a href="/dashboard/user/create" class="btn btn-success mb-4">Buat User Baru</a> --}}
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Sebagai Ustadz</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->id }}</td>
                        <td>{!! $user->name !!}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->is_ustadz }}</td>
                        <td>
                            {{-- <a href="/dashboard/user/{{ $user->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a> --}}
                            <form action="/dashboard/user/{{ $user->id }}" method="post" class="d-inline">
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
