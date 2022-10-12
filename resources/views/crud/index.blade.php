@extends('layouts.main2')

@section('container')
<a class="btn btn-dark" href="{{ url('crud/create') }}">Add</a>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Prodi</th>
        <th scope="col">Fakultas</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($datas as $role)
        <tr>
          <th scope="row">{{ $role->id }}</th>
          <td>{{ $role->nama }}</td>
          <td>{{ $role->prodi }}</td>
          <td>{{ $role->fakultas }}</td>
          <td><a class="btn btn-dark" href="{{ url('crud/'.$role->id.'/edit') }}">Update</a></td>
          <td>
              <form action="{{ url('crud/'.$role->id) }}" method="POST">
                  @csrf
                  <input type="hidden" name="_method" value="DELETE">
                  <button class="btn btn-danger" type="submit">DELETE</button>
              </form>
          </td>
        </tr>
      @endforeach
      {{-- <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr> --}}
    </tbody>
  </table>
@endsection