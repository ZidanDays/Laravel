@extends('layouts.main2')

@section('container')
<form method="POST" action="{{ url('crud') }}">
    @csrf
    Nama     : <input type="text" name="nama"><br>
    Prodi    : <input type="text" name="prodi"><br>
    Fakultas : <input type="text" name="fakultas"><br>
    {{-- <div class="row mb-3">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama">
      </div>
    </div>
    <div class="row mb-3">
      <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
      <div class="col-sm-10">
        <input type="yext" class="form-control" id="prodi">
      </div>
    </div>
    <div class="row mb-3">
        <label for="fakultas" class="col-sm-2 col-form-label">Fakultas</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="fakultas">
        </div>
      </div> --}}

    <button type="submit" class="btn btn-dark mt-3" >Save Data</button>
  </form>
@endsection