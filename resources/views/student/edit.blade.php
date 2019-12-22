@extends('layout/main')

@section('title','Laravel | Edit Mahasiswa')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-8">
        <h1 class="mt-2">Edit Mahasiswa</h1>

        <form method="POST" action="/students/{{ $student->id }}">
            @method('patch')
            @csrf
            <div class="form-group">
              <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ $student->nama }}" id="nama" name="nama" placeholder="Masukkan nama...">
              @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="nrp">NRP</label>
              <input type="text" class="form-control @error('nrp') is-invalid @enderror" value="{{ $student->nrp }}" id="nrp" name="nrp" placeholder="Masukkan nrp...">
              @error('nrp')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" value="{{ $student->email }}" placeholder="Masukkan email...">
            </div>
            <div class="form-group">
              <label for="jurusan">Jurusan</label>
              <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ $student->jurusan }}" placeholder="Masukkan jurusan...">
            </div>
            <button type="submit" class="btn btn-primary">Edit Data</button>
          </form>
      </div>
    </div>
  </div>
@endsection