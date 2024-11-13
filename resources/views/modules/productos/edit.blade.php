@extends('layouts.main')

<div class="container mt-4">
    <h2>Editar Producto</h2>
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('productos.update', $producto->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        
                        <label for="nombre">Nombre del Producto</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required value="{{ $producto->nombre }}">
                    
                        <label for="descripcion" class="mt-3">Descripción</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" required>{{ $producto->descripcion }}</textarea>
                    
                        <label for="precio" class="mt-3">Precio</label>
                        <input type="number" name="precio" id="precio" class="form-control" step="0.01" required value="{{ $producto->precio }}">
                    
                        <label for="stock" class="mt-3">Stock</label>
                        <input type="number" name="stock" id="stock" class="form-control" required value="{{ $producto->stock }}">
                    
                        <button class="btn btn-warning mt-3">Actualizar</button>
                        <a href="{{ route('productos.index') }}" class="btn btn-secondary mt-3">Cancelar</a>

                    </form>
                    
                </div>
              </div>

        </div>
    </div>
</div>
