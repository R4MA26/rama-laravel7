@extends('layouts.template')
@section('title')
Halaman view
@endsection
@section('content')
    <table class="table table-dark" border="1">
  <thead>
    <tr>
      <th scope="col">STB</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">No. HP</th>
    </tr>
  </thead>
  <tbody>
  @foreach($mhs as $i)
    <tr>
    <td>{{$i->id}}</td>
    <td>{{$i->nama}}</td>
    <td>{{$i->alamat}}</td>
    <td>{{$i->nohp}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection