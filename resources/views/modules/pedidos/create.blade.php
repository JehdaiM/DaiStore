@extends('layouts/main')

<div class="container mt-4">
    <h2>Nuevo Pedido</h2>
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('pedidos.store') }}">
                        @csrf
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" required>
                    
                        <label for="descripcion">Descripción:</label>
                        <textarea name="descripcion"></textarea>
                    
                        <label for="precio">Precio:</label>
                        <input type="number" name="precio" step="0.01" required>  <!-- Aquí está el campo precio -->
                    
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" name="cantidad" required>
                    
                        <button type="submit">Guardar</button>
                    </form>
                    
                </div>
            </div>

        </div>
    </div>
</div>
