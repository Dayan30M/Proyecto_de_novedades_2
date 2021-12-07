@extends('layout')

@section('title','Aprendiz')
@section('encabezado','Nueva Aprendiz')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

@endsection


@section('content')
<a href="{{ route('aprendiz.form')}}" class="btn btn-primary">Nuevo Aprendiz</a>
<table id="aprendizs" class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Nombre  </th>
            <th>Apellido  </th>
            <th>Telefono</th>
            <th>Estado </th>
            <th>Email </th>
            <th>Tipo Documento </th>
            <th>Numero De Documento </th>
            <th>Numero de Ficha </th>
            
            <th></th>
        
        </tr>
    </thead>
    <tbody>
        @foreach ($aprendizs as $aprendiz)
        <tr>
            <td>{{ $aprendiz->nom_apren }}</td>
            <td>{{ $aprendiz->apelli_apren }}</td>
            <td>{{ $aprendiz->tel_apren }}</td>
            <td>{{ $aprendiz->estado_apren }}</td>
            <td>{{ $aprendiz->email }}</td>
            <td>{{ $aprendiz->tipo_doc_apren }}</td>
            <td>{{ $aprendiz->num_doc_apren }}</td>
            <td>{{ $aprendiz->ficha->num_ficha }}</td>
            
            <td>
        
            <a href="{{ route('aprendiz.form' , ['id'=> $aprendiz->id]) }}" class="btn btn-warning">Editar</a>
            
            <a href="{{ route('aprendiz.delete' , ['id'=> $aprendiz->id]) }}" class="btn  btn-danger">Borrar</a>
            
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
    $('#aprendizs').DataTable();
</script>
@endsection