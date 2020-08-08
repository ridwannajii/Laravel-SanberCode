@extends('layouts.master')
@section('title','Daftar Pertanyaan')

@section('style')
<link rel="stylesheet" href="{{asset('/adminlte/plugins/fontawesome-free/css/all.min.css')}}">
@endsection

@section('bc')
<li class="breadcrumb-item active">List Pertanyaan</li>
<li class="breadcrumb-item active"><a href="{{url('/pertanyaan/create')}}">Pertanyaan Baru</a></li>
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">DataTable - Pertanyaan</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      @if (session('success'))
      <div class="alert alert-success">
        {{session('success')}}
      </div>
      @endif
      <a class="btn btn-danger" href="/pertanyaan/create" style="margin-bottom: 1.25rem;">Buat Pertanyaan Baru</a>
      <thead>
        <tr>
          <th style="width: 30px;">Id</th>
          <th>Judul Pertanyaan</th>
          <th>Isi Pertanyaan</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($pertanyaan as $key => $question)
        <tr>
          <td>{{$key + 1}}</td>
          <td>{{$question->judul}}</td>
          <td>{{$question->isi}}</td>
          <td style="display: flex;">
            <a href="/pertanyaan/{{$question->id}}" class="btn btn-info btn-sm" style="width: 33.33%; margin-right: 10px">Show</a>
            <a href="/pertanyaan/{{$question->id}}/edit" class="btn btn-primary btn-sm" style="width: 33.33%; margin-right: 10px">Edit</a>
            <form action="/pertanyaan/{{$question->id}}" method="POST" style="width: 33.33%;">
              @csrf
              @method("DELETE")
              <input type="submit" value="delete" class="btn btn-danger btn-sm" style="width: 100%; margin-right: 10px">
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="5" align="center">No Questions</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
@endsection('content')
@push('script')
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  //   $(function () {
  //     $("#example1").DataTable();
  //   });
  $(document).ready(function() {
    $('#example1').DataTable();
  });
</script>
@endpush('script')