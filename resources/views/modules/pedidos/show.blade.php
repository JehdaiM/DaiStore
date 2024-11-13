@extends('layouts/main')

<div class="container mt-4">
    <h2>Mostrar la información del Pedido: {{ $pedido->nombre }}</h2>
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                    <table class="table table-sm text-center">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $pedido->id }}</td>
                                <td>{{ $pedido->nombre }}</td>
                                <td>{{ $pedido->descripcion }}</td>
                                <td>{{ $pedido->precio }}</td>
                                <td>{{ $pedido->cantidad }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('pedidos.index') }}" class="btn btn-secondary mt-4">Cancelar</a>
                </div>
            </div>

        </div>
    </div>
</div>
