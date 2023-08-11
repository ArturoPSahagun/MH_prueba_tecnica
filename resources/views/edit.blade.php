@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Editar producto</h2>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger mt-2">
            <strong>Error</strong> Algo salió mal<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('producto.update', $producto)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="name" class="form-control" value="{{$producto->name}}" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 mt-2">
                <div class="form-group">
                    <strong>Precio:</strong>
                    <input type="number" name="price" class="form-control" step="any" value="{{$producto->price}}"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 mt-2">
                <div class="form-group">
                    <strong>Stock:</strong>
                    <input type="number" name="stock" class="form-control" value="{{$producto->stock}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 mt-2">
                <div class="form-group">
                    <strong>Status:</strong>
                    <select name="status" class="form-select">
                        <option value="">-- Elige el status --</option>
                        <option value="Activo" @selected($producto->status == "Activo")>Activo</option>
                        <option value="Inactivo" @selected($producto->status == "Inactivo")>Inactivo</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{route('producto.index')}}" class="btn btn-danger">Cancelar</a>

            </div>
        </div>
    </form>
</div>
@endsection