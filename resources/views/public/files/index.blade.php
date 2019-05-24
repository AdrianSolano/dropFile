@extends('layouts.app')

@section('title', 'Sobre dropFile!')

@section('content')
<h1>List of files</h1>

@forelse($files as $file)

<div class="card border-dark mb-3">
    <h5 class="card-header">{{ $file->name }}</h5>
    <div class="card-body text-dark">
        <p class="card-text">{{ str_limit($file->descripcion, 100) }}</p>
        <a href="#" class="btn btn-primary">Go</a>
    </div>
</div>

@empty

<p>No files found</p>


@endforelse


@endsection