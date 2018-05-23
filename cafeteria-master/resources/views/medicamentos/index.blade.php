@extends('layouts.default')
@section('content')
<h1>Medicamentos</h1>
@if($exito != null)
    @if($exito == 1)
        <p class="text-success">Se ha agregado un medicmaneto</p>
    @else
        <p class="text-danger">No se ha podido agregar medicamento</p>
    @endif
@endif 

@if($borrado != null)
    @if($borrado == 1)
        <p class="text-success">Se ha borrado un medicamento</p>
    @else
        <p  class="text-danger">No se ha podido borrar el medicamento</p>
    @endif
@endif 

<a href="{{route('medicamentos.create')}}">
    <button class="btn btn-primary">Agregar medicamento</button>
</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($medicamentos as $comida)
            <tr>
                <td>{{$comida->nombre}}</td>
                <td>{{$comida->precio}}</td>
                <td>
                    <a href="{{route('medicamentos.edit',$comida->id)}}">
                        <button class="btn btn-primary">Editar</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection