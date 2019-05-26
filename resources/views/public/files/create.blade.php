@extends('layouts.app')

@section('title','Upload file')

@section('content')
<!-- Vista de creacion de archivos -->
<h1>Upload Files</h1>
<form action="/files" method="post" enctype="multipart/form-data" novalidate>

    @csrf

    @include('public.files.partials.form')
   <button type="submit" class="btn btn-primary">Subir archivo</button>
</form>

@endsection