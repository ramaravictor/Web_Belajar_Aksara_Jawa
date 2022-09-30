@extends('layouts.main')

@section('layout')

    <body class="bg-light">
        <div class="container">
            <h1 class="mt-5">
                <a href="/materi">Materi Pembelajaran</a><br>
                {{ $materi->title }}
            </h1>
            <div class="row g-3">
                <div class="col-md-7">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <article class="mt-5 fs-5">
                                <p class="text-justify"> {!! $materi->body !!} </p>
                            </article>
                            @if ($materi->image)
                                <img src="{{ asset('storage/' . $materi->image) }}" alt="gambar">
                            @else
                            @endif

                            <a href="/materi" class="text-decoration-none d-block mt-5">Kembali ke
                                Materi..</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-5 mt-4 py-3">
                    <div class="position-sticky" style="top: 2rem;">
                        <div class="p-4 mb-3 bg-light rounded">
                            <h4 class="fst-italic mb-4">Latihan Menulis :</h4>

                            <div id="sign" class="border-2 rounded-3"></div>
                            <br />
                            <textarea id="signature" name="signed" style="display: none"></textarea>
                            <div class="row mt-3">
                                <div class="col" align="right">
                                    <button class="btn btn-danger" id="clear"> Hapus </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        var sign = $('#sign').signature({
            syncField: '#signature',
            syncFormat: 'PNG'
        });
        $('#clear').click(function(e) {
            e.preventDefault();
            sign.signature('clear');
            $("#signature").val('');
        });
    </script>
    <span id="res" style="color: green;"></span>
@endsection
