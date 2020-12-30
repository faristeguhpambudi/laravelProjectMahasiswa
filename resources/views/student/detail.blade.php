@extends('templates/utama')

@section('title', 'Halaman Data Students')

@section('konten')
    <div class="row">
        <div class="col-lg mt-3">
            <h1>
                Detail Students
            </h1>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $student->nama }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{ $student->nrp }}</h6>
              <p class="card-text">{{ $student->email }}</p>
              <p class="card-text">{{ $student->jurusan }}</p>
              <a href="/students" class="btn btn-success">Kembali</a>
              <a href="{{ $student->id }}/edit" class="btn btn-primary">Edit</a>
              <form action="{{ $student->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </div>
          </div>
    </div>
@endsection
