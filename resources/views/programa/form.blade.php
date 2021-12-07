@extends('layout')

@section('title','Nuevo Programa')
@section('encabezado','Nuevo Programa')

@section('content')
<form action="{{ route('programa.save') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $programa->id }}">
        <div class="mb-3 row">
            <label for="nom_program" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nom_program" name="nom_program" value="{{ @old('nom_program') ? @old('nom_program') : $programa->nom_program}}">
            </div>
            @error('nom_program')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
        
         <div class="mb-3 row">
            <label for="tipo_program" class="col-sm-2 col-form-label">Tipo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="tipo_program" name="tipo_program" value="{{ @old('tipo_program') ? @old('tipo_program') : $programa->tipo_program}}">
            </div>
            @error('tipo_program')
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