@extends('layouts.app')

@section('title', 'Edit file')

@section('content')
<!-- Vista de edicion de archivos -->
<form action="/files/{{ $file->id }}" method="post" novalidate>

    @csrf
    @method('patch')

    @include('public.files.partials.form')

    <button type="submit" class="btn btn-primary">Editar archivo</button>
</form>
@endsection