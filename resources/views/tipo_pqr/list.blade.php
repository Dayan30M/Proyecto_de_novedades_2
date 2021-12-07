@extends('layout')

@section('title','Nueva PQR')
@section('encabezado','Nueva PQR')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

@endsection


@section('content')
<a href="{{ route('tipo_pqr.form')}}" class="btn btn-primary">Nueva PQR</a>
<table id="tipo_pqrs" class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Numero de PQR </th>
            
            
            <th></th>
        
        </tr>
    </thead>
    <tbody>
        @foreach ($tipo_pqrs as $tipo_pqr)
        <tr>
            <td>{{ $tipo_pqr->nom_tipo_pqr }}</td>
            

            
            <td>
        
            <a href="{{ route('tipo_pqr.form' , ['id'=> $tipo_pqr->id]) }}" class="btn btn-warning">Editar</a>
            
            <a href="{{ route('tipo_pqr.delete' , ['id'=> $tipo_pqr->id]) }}" class="btn  btn-danger">Borrar</a>
            
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
    $('#tipo_pqrs').DataTable();
</script>
@endsection