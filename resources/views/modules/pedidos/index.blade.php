@extends('layouts/main')

@section('contenido')
    <h2>Crud de Pedidos</h2>
    
    <div class="container mt-4">
        <h2>Lista de Pedidos</h2>
        <div class="row">
            <div class="col">

                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('pedidos.create') }}" class="btn btn-primary">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Agregar Pedido
                        </a>
                        <hr>
                        <table class="table table-sm table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Acciones</th>
                                </tr>
                                
                            </thead>
                            <tbody>
                                @forelse ($pedidos as $pedido)
                                    <tr>
                                        <td>{{ $pedido->id }}</td>
                                        <td>{{ $pedido->nombre }}</td>
                                        <td>{{ $pedido->precio }}</td>
                                        <td>{{ $pedido->cantidad }}</td>
                                        <td>
                                            <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <a href="{{ route('pedidos.show', $pedido->id) }}" class="btn btn-info">
                                                    <i class="fa-solid fa-list"></i> Mostrar
                                                </a>

                                                <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-warning">
                                                    <i class="fa-solid fa-pen-to-square"></i> Editar
                                                </a>

                                                <button class="btn btn-danger" type="submit">
                                                    <i class="fa-solid fa-trash"></i> Borrar
                                                </button>

                                                

                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No hay pedidos registrados</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            {{ $pedidos->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
