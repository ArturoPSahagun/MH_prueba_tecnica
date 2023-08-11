@extends('layouts.base')

@section('content')
<div class="row">
    <div>
        <h2 class="text-white">MassiveHome Prueba Técnica : CRUD de productos</h2>
    </div>

    @if (Session::get('success'))
        <div class="alert alert-success mt-2">
            <strong>{{Session::get('success')}}</strong>
        </div>
    @endif

    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Status</th>
                <th>Acciones</th>
            </tr>

            @foreach ($productos as $prod)
                <tr>
                    <td>{{$prod->id}}</td>
                    <td class="fw-bold">{{$prod->name}}</td>
                    <td>${{number_format((float)$prod->price, 2, '.', '')}}</td>
                    <td>{{$prod->stock}}</td>
                    <td>
                        <span class="badge bg-{{$prod->status == 'Activo' ? 'success' : 'danger'}} fs-6">{{$prod->status}}</span>
                    </td>
                    <td>
                        <a href="{{route('producto.edit', $prod)}}" class="btn btn-warning">Editar</a>

                        <form action="{{route('producto.destroy', $prod)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div>
        <a href="{{route('producto.create')}}" class="btn btn-primary">Crear producto</a>
    </div>
</div>
@endsection