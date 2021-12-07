@extends('layout')

@section('title','Nueva PQR')
@section('encabezado','Nueva PQR')

@section('content')
<form action="{{ route('pqr.save') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $pqr->id }}">

        <div class="mb-3 row">
            <label for="nis" class="col-sm-2 col-form-label">Nis</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nis" name="nis" value="{{ @old('nis') ? @old('nis') : $pqr->nis}}">
            </div>
            @error('nis')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="mb-3 row">
            <label for="respuesta" class="col-sm-2 col-form-label">Respuesta</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="respuesta" name="respuesta" value="{{ @old('respuesta') ? @old('respuesta') : $pqr->respuesta}}">
            </div>
            @error('respuesta')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="mb-3 row">
            <label for="observacion_pqr" class="col-sm-2 col-form-label">Observación</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="observacion_pqr" name="observacion_pqr" value="{{ @old('observacion_pqr') ? @old('observacion_pqr') : $pqr->observacion_pqr}}">
            </div>
            @error('observacion_pqr')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="mb-3 row">
            <label for="estado" class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="estado" name="estado" value="{{ @old('estado') ? @old('estado') : $pqr->estado}}">
            </div>
            @error('estado')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
     
       
        <div class="row">
            <div class="col-sm-11"></div>
            <div class="col-sm-1">
                <button type='submit' class="btn btn-primary">Guardar</button>
            </div>
        </div>

</form>
@endsection
