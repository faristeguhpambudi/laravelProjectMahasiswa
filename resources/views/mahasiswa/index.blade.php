@extends('templates/utama')

@section('title', 'Halaman Data Mahasiswa')

@section('konten')
    <div class="row">
        <div class="col-lg mt-3">
            <h1>
                Data Mahasiswa
            </h1>

            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NRP</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $i = 1;?>
                    @foreach($mahasiswa as $mhs)
                        <tr>
                            <th scope="col">{{ $i }}</th>
                            <td>{{ $mhs->nama }}</td>
                            <td>{{ $mhs->nrp }}</td>
                            <td>{{ $mhs->email }}</td>
                            <td>{{ $mhs->jurusan }}</td>
                            <td>
                                <a href="" class="badge badge-warning"> Edit</a>
                                <a href="" class="badge badge-danger ml-2"> Delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection
