@extends('layouts.main2')

@section('container')
<form method="POST" action="{{ url('crud/'.$role->id) }}">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    Nama     : <input type="text" name="nama" value="{{ $role->nama }}"><br>
    Prodi    : <input type="text" name="prodi" value="{{ $role->prodi }}"><br>
    Fakultas : <input type="text" name="fakultas" value="{{ $role->fakultas }}"><br>

    <button type="submit" class="btn btn-dark mt-3" >Change Data</button>
  </form>
@endsection