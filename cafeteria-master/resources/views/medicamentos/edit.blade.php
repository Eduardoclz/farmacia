@extends('layouts.default')
@section('content')
    <h1>Editar Medicamento</h1>
    <a href="{{route('medicamentos.index')}}"><h3>Volver a Medicamentos</h3></a>
    @if($exito)
        <p class="text-success">El medicamento se actualizó</p>
    @endif
    <form method="POST" action="{{ route('medicamentos.update',array('medicamentos'=>$comida->id)) }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label class="form-label">Nombre:</label>
            <input class="form-control" type="text" name="txtNombre" value="{{$comida->nombre}}">
        </div>
        <div class="form-group">
            <label class="form-label">Precio:</label>
            <input class="form-control" type="text" name="txtPrecio" value="{{$comida->precio}}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Actualizar Medicamento</button>
        </div>
    </form>
    <form method="POST" action="{{route('medicamentos.destroy',array('medicamentos'=>$comida->id))}}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger">Borrar medicamento</button>
    </form>
@endsection
