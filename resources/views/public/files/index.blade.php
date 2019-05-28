@extends('layouts.app')

@section('title', 'Sobre dropFile!')

@section('content')
<!-- Lista de archivos -->
<h1>List of files</h1>

@forelse($files as $file)

<div class="card border-dark mb-3">
    <h5 class="card-header">{{ $file->name }}</h5>
    <div class="card-body text-dark">
        <h5 class="card-title">Usuario: <a href="{{ route('userFiles.index', $file->user->slug) }}" title="{{ $file->user->name }}'s file list">{{ $file->user->name }}</a></h5>
        <img class="img-thumbnail mx-auto" src="{{ $file->file }}" alt="...">
        <p class="card-text">{{ str_limit($file->descripcion, 100) }}</p>

        @include('public.files.partials.buttons')
        <a href="/files/{{ $file->slug }}" class="btn btn-primary btn-sm mr-2 float-right">Show Info</a>
    </div>
</div>

@empty

<p>No files found</p>


@endforelse


@endsection