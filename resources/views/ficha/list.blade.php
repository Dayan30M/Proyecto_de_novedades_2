@extends('layout')

@section('title','Nueva Ficha')
@section('encabezado','Nueva Ficha')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

@endsection

@section('content')
<a href="{{ route('ficha.form')}}" class="btn btn-primary">Nueva Ficha</a>
<table id="fichas" class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Numero de Ficha </th>
            <th>Programa</th>
            <th>Tipo programa</th>
            
            <th></th>
        
        </tr>
    </thead>
    <tbody>
        @foreach ($fichas as $ficha)
        <tr>
            <td>{{ $ficha->num_ficha }}</td>
            <td>{{ $ficha->programa->nom_program }}</td>
            <td>{{ $ficha->programa->tipo_program }}</td>

            
            <td>
        
            <a href="{{ route('ficha.form' , ['id'=> $ficha->id]) }}" class="btn btn-warning">Editar</a>
            
            <a href="{{ route('ficha.delete' , ['id'=> $ficha->id]) }}" class="btn  btn-danger">Borrar</a>
            
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
    $('#fichas').DataTable();
</script>
@endsection