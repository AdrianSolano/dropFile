@extends('layouts.app')

@section('title', 'File Info')

@section('content')
<!-- Show de archivos -->
    <h2>{{ $file->name }}</h2>
    <p>{{ $file->descripcion }}</p>
@endsection