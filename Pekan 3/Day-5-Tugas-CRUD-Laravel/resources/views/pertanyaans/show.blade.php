@extends('layouts.master')
@section('title','List Pertanyaan')

@section('content')
<h3>Judul Pertanyaan : {{$pertanyaan->judul}}</h3>
<p>Isi Pertanyaan : {{$pertanyaan->isi}}</p>
@endsection