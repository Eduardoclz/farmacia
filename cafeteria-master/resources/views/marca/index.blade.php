@extends('layouts.default')
@section('content')
<h1>Marca</h1>
@if($exito != null)
    @if($exito == 1)
        <p class="text-success">Se ha agregado un marca</p>
    @else
        <p class="text-danger">No se ha podido agregar marca</p>
    @endif
@endif 

@if($borrado != null)
    @if($borrado == 1)
        <p class="text-success">Se ha borrado un marca</p>
    @else
        <p  class="text-danger">No se ha podido borrar la marca</p>
    @endif
@endif 

<a href="{{route('marca.create')}}">
    <button class="btn btn-primary">Agregar medicamento</button>
</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
           
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($marca as $comida)
            <tr>
                <td>{{$comida->marca}}</td>
         
                <td>
                    <a href="{{route('marca.edit',$comida->id)}}">
                        <button class="btn btn-primary">Editar</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection