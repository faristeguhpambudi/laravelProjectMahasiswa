@extends('templates/utama')

@section('title', 'Halaman Form Data Students')

@section('konten')
    <div class="row">
        <div class="col-lg mt-3">
            <h1>
                fORM Tambah Data Student
            </h1>
        </div>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/students">
            @csrf
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nrp">nrp  </label>
                <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" value="{{ old('nrp') }}">
                @error('nrp')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jurusan">jurusan</label>
                <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" value="{{ old('jurusan') }}">
                @error('jurusan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
          </form>
    </div>
@endsection
