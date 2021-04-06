@extends('layouts.template')
@section('title')
Halaman add data
@endsection
@section('content')
    <form method="POST" action="tambahmhs">
        @csrf
        <div class="form-group">
            <label for="nama">Name</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="alamat">Address</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        <div class="form-group">
            <label for="nohp">No.Handphone</label>
            <input type="text" class="form-control" id="nohp" name="nohp">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection