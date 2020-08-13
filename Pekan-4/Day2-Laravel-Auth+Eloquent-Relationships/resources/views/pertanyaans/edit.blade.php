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
        <label for="title">Judul Pertanyaan</label>
        <input type="text" class="form-control" id="title" name="title" value="{{old('title', $pertanyaan->title)}}" placeholder="Enter your title">
        @error('title')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="content">Isi Pertanyaan</label>
        <textarea class="form-control" rows="3" id="content" name="content" placeholder="Enter your content">{{old('content', $pertanyaan->content)}}</textarea>
        @error('content')
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