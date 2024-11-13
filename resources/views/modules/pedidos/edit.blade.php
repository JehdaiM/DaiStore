@extends('layouts.main')

<div class="container mt-4">
    <h2>Actualizar Pedido</h2>
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Campo Nombre -->
                        <label for="nombre">Nombre del Pedido</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required value="{{ $pedido->nombre }}">

                        <!-- Campo Descripción -->
                        <label for="descripcion" class="mt-3">Descripción</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" required>{{ $pedido->descripcion }}</textarea>

                        <!-- Campo Precio -->
                        <label for="precio" class="mt-3">Precio</label>
                        <input type="number" name="precio" id="precio" class="form-control" required value="{{ $pedido->precio }}" step="0.01">

                        <!-- Campo Cantidad -->
                        <label for="cantidad" class="mt-3">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" class="form-control" required value="{{ $pedido->cantidad }}">

                        <!-- Botones -->
                        <button class="btn btn-warning mt-3">Actualizar</button>
                        <a href="{{ route('pedidos.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
                        
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
