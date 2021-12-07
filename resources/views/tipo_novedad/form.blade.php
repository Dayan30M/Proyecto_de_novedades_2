
@extends('layout')

@section('title','Registro Novedad')
@section('encabezado','Registro Novedad')

@section('content')

<form action="{{ route('tipo_novedad.save') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $tipo_novedad->id }}">
    
    <div class="mb-3 row">
            <label for="novedad" class="col-sm-2 col-form-label">Codigo de la novedad</label>
            <div class="col-sm-10">
              <select    name="novedad" class="form-select">
                  @foreach ($novedads as $novedad)
                      <option readonly value="{{ $novedad->id }}"
                      {{ $tipo_novedad->novedad_id == $novedad->id ? "selected" : ""}}
                      >{{ $novedad->aprendiz_id }}</option>
                  @endforeach
              </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="fecha_realizacion" class="col-sm-2 col-form-label">Fecha</label>
            <div class="col-sm-10">
              <input type="date"  value="2021-11-19" min="2021-11-20" class="form-control" id="fecha_realizacion" name="fecha_realizacion" value="{{ @old('fecha_realizacion') ? @old('fecha_realizacion') : $tipo_novedad->fecha_realizacion}}">
            </div>
            @error('fecha_realizacion')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>


        <div class="mb-3 row">
            <label for="respuesta" class="col-sm-2 col-form-label">Respuesta</label>
            <div class="col-sm-10">
              <input type="text"  class="form-control" id="respuesta" name="respuesta" value="{{ @old('respuesta') ? @old('respuesta') : $tipo_novedad->respuesta}}">
            </div>
            @error('respuesta')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>



        <div class="mb-3 row">
            <label for="observacion" class="col-sm-2 col-form-label">Observación</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="observacion" name="observacion" value="{{ @old('observacion') ? @old('observacion') : $tipo_novedad->observacion}}">
            </div>
            @error('observacion')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>


        <div class="mb-3 row">
            <label for="fecha_reintegro" class="col-sm-2 col-form-label">Fecha reintegro</label>
            <div class="col-sm-10">
              <input type="date"  value="2021-11-19" min="2021-11-20"class="form-control" id="fecha_reintegro" name="fecha_reintegro" value="{{ @old('fecha_reintegro') ? @old('fecha_reintegro') : $tipo_novedad->fecha_reintegro}}">
            </div>
            @error('fecha_reintegro')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>


        <div class="mb-3 row">
            <label for="estado_nov" class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="estado_nov" name="estado_nov" value="{{ @old('estado_nov') ? @old('estado_nov') : $tipo_novedad->estado_nov}}">
            </div>
            @error('estado_nov')
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