@extends('layouts.master')
@section('title','Edit Pertanyaan')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Edit Pertanyaan {{$pertanyaan->id}}</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form" action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="card-body">
      <div class="form-group">
        <label for="judul">Title</label>
        <input type="text" class="form-control" id="judul" name="judul" value="{{old('judul', $pertanyaan->judul)}}" placeholder="Enter your title">
        @error('judul')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="isi">Content</label>
        <textarea class="form-control" rows="3" id="isi" name="isi" placeholder="Enter your content">{{old('isi', $pertanyaan->isi)}}</textarea>
        @error('isi')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
@endsection('content')