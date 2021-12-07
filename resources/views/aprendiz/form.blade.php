@extends('layout')

@section('title','Nuevo Aprendiz')
@section('encabezado','Nuevo Aprendiz')

@section('content')
<form action="{{ route('aprendiz.save') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $aprendiz->id }}">
        <div class="mb-3 row">
            <label for="nom_apren" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nom_apren" name="nom_apren" value="{{ @old('nom_apren') ? @old('nom_apren') : $aprendiz->nom_apren}}">
            </div>
            @error('nom_apren')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>


        <div class="mb-3 row">
            <label for="apelli_apren" class="col-sm-2 col-form-label">Apellido</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="apelli_apren" name="apelli_apren" value="{{ @old('apelli_apren') ? @old('apelli_apren') : $aprendiz->apelli_apren}}">
            </div>
            @error('apelli_apren')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="mb-3 row">
            <label for="tel_apren" class="col-sm-2 col-form-label">Telefono</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="tel_apren" name="tel_apren" value="{{ @old('tel_apren') ? @old('tel_apren') : $aprendiz->tel_apren}}">
            </div>
            @error('tel_apren')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="mb-3 row">
            <label for="estado_apren" class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="estado_apren" name="estado_apren" value="{{ @old('estado_apren') ? @old('estado_apren') : $aprendiz->estado_apren}}">
            </div>
            @error('estado_apren')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="email" name="email" value="{{ @old('email') ? @old('email') : $aprendiz->email}}">
            </div>
            @error('email')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>


        <div class="mb-3 row">
            <label for="tipo_doc_apren" class="col-sm-2 col-form-label">Tipo Documento</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="tipo_doc_apren" name="tipo_doc_apren" value="{{ @old('tipo_doc_apren') ? @old('tipo_doc_apren') : $aprendiz->tipo_doc_apren}}">
            </div>
            @error('tipo_doc_apren')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="mb-3 row">
            <label for="num_doc_apren" class="col-sm-2 col-form-label">Numero de Documento</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="num_doc_apren" name="num_doc_apren" value="{{ @old('num_doc_apren') ? @old('num_doc_apren') : $aprendiz->num_doc_apren}}">
            </div>
            @error('num_doc_apren')
            <p class="text-danger">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="mb-3 row">
            <label for="ficha" class="col-sm-2 col-form-label">Ficha</label>
            <div class="col-sm-10">
              <select name="ficha" class="form-select">
                  @foreach ($fichas as $ficha)
                      <option value="{{ $ficha->id }}"
                      {{ $aprendiz->ficha_id == $ficha->id ? "selected" : ""}}
                      >{{ $ficha->num_ficha }}</option>
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

