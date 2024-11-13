<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // Obtener los pedidos (paginar si es necesario)
    $pedidos = Pedido::paginate(4);

    // Pasar la variable $pedidos a la vista
    return view('modules.pedidos.index', compact('pedidos'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modules.pedidos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
            'cantidad' => 'required|integer|min:1',
        ]);
    
        // Crear el nuevo pedido
        Pedido::create($request->all());
    
        return redirect()->route('pedidos.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    // Buscar el pedido por ID
    $pedido = Pedido::findOrFail($id);

    // Pasar el pedido a la vista
    return view('modules.pedidos.show', compact('pedido'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('modules.pedidos.edit', compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->nombre = $request->input('nombre');
        $pedido->descripcion = $request->input('descripcion');
        // Actualiza cualquier otro campo necesario para el modelo Pedido
        $pedido->save();

        return redirect()->route('pedidos.index')->with('success', 'Pedido actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Pedido::find($id);
        $item->delete();

        return to_route('pedidos.index');
    }
}
