@extends('layout')

@section('title','Nueva Ficha')
@section('encabezado','Nueva Ficha')

@section('content')
<form action="{{ route('ficha.save') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $ficha->id }}">
        <div class="mb-3 row">
            <label for="num_ficha" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="num_ficha" name="num_ficha" value="{{ @old('num_ficha') ? @old('num_ficha') : $ficha->num_ficha}}">
            </div>
            @error('num_ficha')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
     
       
        <div class="mb-3 row">
            <label for="programa" class="col-sm-2 col-form-label">Programa</label>
            <div class="col-sm-10">
              <select name="programa" class="form-select">
                  @foreach ($programas as $programa)
                      <option value="{{ $programa->id }}"
                      {{ $ficha->programa_id == $programa->id ? "selected" : ""}}
                      >{{ $programa->nom_program }}</option>
                  @endforeach
              </select>
            </div>
        </div>
     

        <div class="row">
            <div class="col-sm-11"></div>
            <div class="col-sm-1">
                <button type='submit' class="btn btn-primary">Guardar</button>
            </div>
        </div>

</form>
@endsection