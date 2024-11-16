<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Users extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function wel()
    {
        return view('wel');
    }

    public function index()
    {
        $items = User::paginate(4);
        return view('modules.usuarios.index', compact('items'));
    }

    public function create()
    {
        return view('modules.usuarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        $item = new User();
        $item->name = $request->name;
        $item->email = $request->email;
        $item->password = bcrypt($request->password);  
        $item->save();

        return redirect()->route('index');  
        }

    public function show(string $id)
    {
        $item = User::find($id);
        return view('modules.usuarios.show', compact('item'));
    }

    public function edit(string $id)
    {
        $item = User::find($id);
        return view('modules.usuarios.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        
        if ($request->input('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

        return redirect()->route('index')->with('success', 'Usuario actualizado correctamente.');
    }

    public function destroy(string $id)
    {
        $item = User::find($id);
        $item->delete();
        return redirect()->route('index');
    }
}
