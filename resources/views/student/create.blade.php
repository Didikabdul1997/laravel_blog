@extends('layout/main')

@section('title','Laravel | Create Mahasiswa')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-8">
        <h1 class="mt-2">Create Mahasiswa</h1>

        <form method="POST" action="{{ url('/students') }}">
            @csrf
            <div class="form-group">
              <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" id="nama" name="nama" placeholder="Masukkan nama...">
              @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="nrp">NRP</label>
              <input type="text" class="form-control @error('nrp') is-invalid @enderror" value="{{ old('nrp') }}" id="nrp" name="nrp" placeholder="Masukkan nrp...">
              @error('nrp')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email...">
            </div>
            <div class="form-group">
              <label for="jurusan">Jurusan</label>
              <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ old('jurusan') }}" placeholder="Masukkan jurusan...">
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
          </form>
      </div>
    </div>
  </div>
@endsection