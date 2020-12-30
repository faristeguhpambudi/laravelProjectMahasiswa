@extends('templates/utama')

@section('title', 'Halaman About')

@section('konten')
    <div class="row">
        <div class="col-lg-10 mt-3">
            <h1>
                Hai <?= $nama; ?>
            </h1>
        </div>
    </div>
@endsection
