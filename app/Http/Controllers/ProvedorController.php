<?php

namespace App\Http\Controllers;
use App\Models\Provedor;
use Illuminate\Http\Request;

class ProvedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provedores=provedor::orderBy('id','desc')->get();
        return view('provedor.index', compact('provedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('provedor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre'    => 'required|string|max:255',
            'documento' => 'required|string|max:255|unique:provedor,documento',
            'direccion' => 'nullable|string|max:255',
            'telefono'  => 'nullable|string|max:50',
            'correo'    => 'required|email|max:255|unique:provedor,correo',
            'estado'    => 'required|in:activo,inactivo',
        ]);

        provedor::create($data);

        return redirect()->route('provedor.index')
            ->with('success', '✅ Provedor creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $provedor=provedor::findOrFail($id);
        return view('provedor.edit', compact('provedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
        'nombre'    => 'required|string|max:255',
        'documento' => 'required|string|max:255|unique:provedor,documento,' . $id,
        'direccion' => 'nullable|string|max:255',
        'telefono'  => 'nullable|string|max:50',
        'correo'    => 'required|email|max:255|unique:provedor,correo,' . $id,
        'estado'    => 'required|in:activo,inactivo',
    ]);

    $provedor = Provedor::findOrFail($id);
    $provedor->update($request->all());

    return redirect()->route('provedor.index')
        ->with('success', '✅ Provedor actualizado exitosamente');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $provedor=provedor::findOrFail($id);
        $provedor->delete();

        return redirect()->route('provedor.index')
            ->with('success', '✅ Provedor eliminado exitosamente');
    }
}
