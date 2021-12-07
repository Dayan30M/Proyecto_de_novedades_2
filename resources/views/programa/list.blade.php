@extends('layout')

@section('title','Nuevo Programa')
@section('encabezado','Nuevo Programa')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

@endsection


@section('content')
<a href="{{ route('programa.form')}}" class="btn btn-primary">Nuevo Programa</a>
<table id="programas" class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Nombre </th>
            <th>Tipo de programa</th>
            
            <th></th>
        
        </tr>
    </thead>
    <tbody>
        @foreach ($programas as $programa)
        <tr>
            <td>{{ $programa->nom_program }}</td>
            <td>{{ $programa->tipo_program }}</td>

            
            <td>
        
            <a href="{{ route('programa.form' , ['id'=> $programa->id]) }}" class="btn btn-warning">Editar</a>
            
            <a href="{{ route('programa.delete' , ['id'=> $programa->id]) }}" class="btn  btn-danger">Borrar</a>
            
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
    $('#programas').DataTable();
</script>
@endsection