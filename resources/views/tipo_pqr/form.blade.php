@extends('layout')

@section('title','Nueva PQR')
@section('encabezado','Nueva PQR')

@section('content')
<form action="{{ route('tipo_pqr.save') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $tipo_pqr->id }}">
        <div class="mb-3 row">
            <label for="nom_tipo_pqr" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nom_tipo_pqr" name="nom_tipo_pqr" value="{{ @old('nom_tipo_pqr') ? @old('nom_tipo_pqr') : $tipo_pqr->nom_tipo_pqr}}">
            </div>
            @error('nom_tipo_pqr')
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