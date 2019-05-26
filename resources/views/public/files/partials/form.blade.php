<!-- Form de subida del archivo -->

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control {{ $errors->has('name')?"is-invalid":"" }}" id="name" name="name" placeholder="Introduce el nombre del archivo" value="{{ isset($file)?$file->name:old('name') }}" required>
            @if( $errors->has('name'))
            <div class="invalid-feedback">
                {{ $errors->first('name') }}
            </div>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label for="file">Subir Archivo aqui</label>
        <input type="file" class="form-control-file mt-1 {{ $errors->has('file')?"is-invalid":"" }}" id="file" name="file">
        @if( $errors->has('file'))
        <div class="invalid-feedback">
            {{ $errors->first('file') }}
        </div>
        @endif
    </div>
</div>
<div class="form-group">
    <label for="descripcion">Descripción</label>
    <textarea class="form-control {{ $errors->has('descripcion')?"is-invalid":"" }}" id="descripcion" name="descripcion" rows="5" placeholder="Descripción para el archivo" required>{{ isset($file)?$file->descripcion:old('descripcion') }}</textarea>
    @if( $errors->has('descripcion'))
    <div class="invalid-feedback">
        {{ $errors->first('descripcion') }}
    </div>
    @endif
</div>