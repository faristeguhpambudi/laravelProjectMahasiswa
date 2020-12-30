@extends('templates/utama')

@section('title', 'Halaman Data Students')

@section('konten')
    <div class="row">
        <div class="col-lg mt-3">
            <h1>
                Data Students
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <a href="/students/create" class="btn btn-primary mt-2 mb-2">Tambah Data Students</a>
        </div>
    </div>

    @if (session('pesan'))
    <div class="alert alert-success">
        {{ session('pesan') }}
    </div>
    @endif

    <div class="col-lg-6">
        <ul class="list-group">
            @foreach ($students as $student)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $student->nama }}
                <a href="/students/{{ $student->id }}" class="badge badge-info">Detail</a>
            </li>
            @endforeach
          </ul>
    </div>
@endsection
