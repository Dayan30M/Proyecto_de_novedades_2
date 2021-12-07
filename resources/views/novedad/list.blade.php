@extends('layout')

@section('title','Nueva Novedad')
@section('encabezado','Nueva Novedad')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

@endsection


@section('content')
@if( Auth::user()->rol == '2')
<a href="{{ route('novedad.form')}}" class="btn btn-primary">Nueva Novedad</a>

@endif


@if( Auth::user()->rol == '3')
<table id= "novedads" class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Nombre de Novedad </th>
            <th>Fecha peticion</th>
            <th>Motivo</th>
            <th>Nombre Aprendiz</th>
            <th>Apellido Aprendiz</th>
            <th>No Documento</th>
            
            
            <th></th>
        
        </tr>
    </thead>
    <tbody>
        @foreach ($novedads as $novedad)
        <tr>
            <td>{{ $novedad->nom_novedad }}</td>
            <td>{{ $novedad->fecha_peticion }}</td>
            <td>{{ $novedad->motivo }}</td>
            <td>{{ $novedad->aprendiz->nom_apren }}</td>
            <td>{{ $novedad->aprendiz->apelli_apren }}</td>
            <td>{{ $novedad->aprendiz->num_doc_apren }}</td>
            <td>
            

            <a href="{{ route('tipo_novedad.form')}}" class="btn btn-primary">Dar respuesta</a>
            <a href="{{ route('tipo_novedad.form' , ['id'=> $novedad->id]) }}" class="btn btn-warning">Responder</a>
            
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif

@endsection



@section('js')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

<script>
    $('#novedads').DataTable();
</script>
@endsection