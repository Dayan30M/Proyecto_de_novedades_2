@extends('layout')

@section('title','Registro Novedad')
@section('encabezado','Registro Novedad')

@section('content')

<form action="{{ route('novedad.save') }}" method="post">

    


    @csrf
    <input type="hidden" name="id" value="{{ $novedad->id }}">
    <div class="mb-3 row">
            <label for="aprendiz" class="col-sm-2 col-form-label">No documento aprendiz</label>
            <div class="col-sm-10">
              <select name="aprendiz" class="form-select">
                  @foreach ($aprendizs as $aprendiz)
                      <option value="{{ $aprendiz->id }}"
                      {{ $novedad->aprendiz_id == $aprendiz->id ? "selected" : ""}}
                      >{{ $aprendiz->num_doc_apren }}</option>
                  @endforeach
              </select>
            </div>
        </div>


        <div class="mb-3 row">
            <label for="nom_novedad" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <select id="nom_novedad" name="nom_novedad" class="form-select">
                    <option class="form-control" id="nom_novedad" name="nom_novedad" >Traslado de Ficha</option>
                    <option class="form-control" id="nom_novedad" name="nom_novedad" >Traslado de Centro</option>
                    <option class="form-control" id="nom_novedad" name="nom_novedad" >Aplazamiento</option>
                    <option class="form-control" id="nom_novedad" name="nom_novedad" >Retiro Voluntario</option>

                    </select>
            </div>
            @error('nom_novedad')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>


        <div class="mb-3 row">
            <label for="fecha_peticion" class="col-sm-2 col-form-label">Fecha</label>
            <div class="col-sm-10">
              <input type="date"  value="2021-11-19" min="2021-11-20" class="form-control" id="fecha_peticion" name="fecha_peticion" value="{{ @old('fecha_peticion') ? @old('fecha_peticion') : $novedad->fecha_peticion}}">
            </div>

            @error('fecha_peticion')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>
     

        <div class="mb-3 row">
            <label for="motivo" class="col-sm-2 col-form-label">Motivo</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="motivo" name="motivo" value="{{ @old('motivo') ? @old('motivo') : $novedad->motivo}}">
            </div>
            @error('motivo')
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