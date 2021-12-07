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


@if( Auth::user()->rol == '2')
<table id= "novedads" class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Fecha Realización </th>
            <th>Respuesta</th>
            <th>Observación</th>
            <th>Fecha Reintegro</th>
            <th>Estado novedad</th>
            <th>Nis</th>
            <th>Codigo Aprendiz</th>
            
            
            <th></th>
        
        </tr>
    </thead>
    @if( Auth::user()->id == '5')
    <tbody>
        @foreach ($tipo_novedads as $tipo_novedad)
        <tr>
            <td>{{ $tipo_novedad->fecha_realizacion }}</td>
            <td>{{ $tipo_novedad->respuesta }}</td>
            <td>{{ $tipo_novedad->observacion }}</td>
            <td>{{ $tipo_novedad->fecha_reintegro }}</td>
            <td>{{ $tipo_novedad->estado_nov }}</td>
            <td>{{ $tipo_novedad->novedad->id }}</td>
            <td>{{ $tipo_novedad->novedad->aprendiz_id }}</td>
      
            
        </tr>
        @endforeach
    </tbody>
    @endif
</table>
@endif

@endsection



@section('js')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

<script>
    $('#tipo_novedads').DataTable();
</script>
@endsection