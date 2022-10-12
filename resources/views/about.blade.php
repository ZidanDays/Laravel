{{-- jika ingin mengakses web reference dari mainnya maka deklarasikan terlebih dahulu seperti di bawah --}}
@extends('layouts.main')

{{-- section container terhubung dengan @yield('container'), yang ada di main.blade.php / web parentsnya --}}
@section('container')
    {{-- untuk pengaksessan semua data ada di folder app/Models --}}
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <h5>{{ $email }}</h5>
    <img src="img/{{ $image }}" alt="img/{{ $image }}" width="200" class="img-thumbnail rounded-circle">
@endsection