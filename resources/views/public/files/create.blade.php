@extends('layouts.app')

@section('title','UploadFile')

@section('content')
<h1>Upload Files</h1>
<form id="formulario" action="/files" method="post" enctype="multipart/form-data">

    @csrf

    @include('public.files.partials.form')
    <div class="col-md-6">
    <button type="submit" data-toggle="modal" data-backdrop="static" class="btn btn-primary">Guardar</button>
    </div>
</form>

@endsection