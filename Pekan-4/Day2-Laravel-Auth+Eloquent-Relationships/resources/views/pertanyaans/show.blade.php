@extends('layouts.master')
@section('title','List Pertanyaan')

@section('content')
<h3>Judul Pertanyaan : {{$pertanyaan->title}}</h3>
<p>Isi Pertanyaan : {{$pertanyaan->content}}</p>
@endsection