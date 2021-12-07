@extends('layout')

@section('title','Nueva PQR')
@section('encabezado','Nueva PQR')


@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

@endsection


@section('content')
<a href="{{ route('pqr.form')}}" class="btn btn-primary">Nueva PQR</a>
<table id="pqrs" class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Nis </th>
            <th>Respuesta </th>
            <th>Observación </th>
            <th>Estado </th>
            <th></th>
        
        </tr>
    </thead>
    <tbody>
        @foreach ($pqrs as $pqr)
        <tr>
            <td>{{ $pqr->nis }}</td>
            <td>{{ $pqr->respuesta }}</td>
            <td>{{ $pqr->observacion_pqr }}</td>
            <td>{{ $pqr->estado }}</td>

            <td>
        
            <a href="{{ route('pqr.form' , ['id'=> $pqr->id]) }}" class="btn btn-warning">Editar</a>
            
            <a href="{{ route('pqr.delete' , ['id'=> $pqr->id]) }}" class="btn  btn-danger">Borrar</a>
            
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection


@section('js')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

<script>
    $('#pqrs').DataTable();
</script>
@endsection