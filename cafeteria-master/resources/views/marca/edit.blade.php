@extends('layouts.default')
@section('content')
    <h1>Editar marca/h1>
    <a href="{{route('marca.index')}}"><h3>Volver a marcas</h3></a>
    @if($exito)
        <p class="text-success">la marca se actualizó</p>
    @endif
    <form method="POST" action="{{ route('marca.update',array('marca'=>$marca->id)) }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label class="form-label">Nombre:</label>
            <input class="form-control" type="text" name="txtNombre" value="{{$marca->marca}}">
        </div>
    
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Actualizar marca</button>
        </div>
    </form>
    <form method="POST" action="{{route('marca.destroy',array('marca'=>$marca->id))}}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger">Borrar marca</button>
    </form>
@endsection
