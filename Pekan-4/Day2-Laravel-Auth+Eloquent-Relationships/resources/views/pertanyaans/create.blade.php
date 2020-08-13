@extends('layouts.master')
@section('title','Buat Pertanyaan Baru')

@section('style')
<link rel="stylesheet" href="{{asset('/adminlte/plugins/fontawesome-free/css/all.min.css')}}">
@endsection

@section('menuPertanyaan','active')

@section('bc')
<li class="breadcrumb-item active"><a href="{{url('/pertanyaan')}}">List Pertanyaan</a></li>
<li class="breadcrumb-item active">Pertanyaan Baru</li>
@endsection

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Buat Pertanyaan</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form role="form" action="{{url('/pertanyaan')}}" method="POST">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="title">Judul Pertanyaan</label>
        <input type="text" class="form-control" id="title" name="title" value="{{old('title', '')}}" placeholder="Enter your title">
        @error('title')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="content">Isi Pertanyaan</label>
        <textarea class="form-control" rows="3" id="content" name="content" placeholder="Enter your content">{{old('content', '')}}</textarea>
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