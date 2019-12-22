@extends('layout/main')

@section('title','Laravel | Mahasiswa')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1 class="mt-2">Daftar Mahasiswa</h1>
        @if (session('status'))
            <div class="alert alert-success">
              {{session('status')}}
            </div>
        @endif
        @if (session('danger'))
            <div class="alert alert-danger">
              {{session('danger')}}
            </div>
        @endif
            <a href="{{ url('/students/create')}}" class="btn btn-primary my-3">Tambah Data</a>
            <ul class="list-group">
                @foreach ($students as $std)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $std->nama }}
                        <a href="/students/{{ $std->id }}" class="badge badge-info">detail</a>
                    </li>
                @endforeach
            </ul>
      </div>
    </div>
  </div>
@endsection