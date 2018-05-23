@extends('layouts.default')
@section('content')
    <h1>NUEVA MARCA</h1>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ route('marca.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="form-label">Nombre:</label>
                    <input class="form-control" type="text" name="txtNombre">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Agregar marca</button>
                </div>
            </form>
        </div>
    </div>
@endsection