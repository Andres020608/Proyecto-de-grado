<?php


namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categoria;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
    

public function index()
{
    $products = Product::all(); // Traemos los productos de la base de datos

    return view('productos.index', compact('products'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'nullable|string',
        'categoria_id' => 'required|integer',
        'cantidad' => 'required|integer',
        'precio' => 'required|numeric',
        'imagen' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $data = $request->all();

    // Si hay imagen, la guardamos
    if ($request->hasFile('imagen')) {
        $path = $request->file('imagen')->store('productos', 'public');
        $data['imagen'] = $path;
    }

    


    Product::create($data);

    return redirect()->route('products.index')
        ->with('success', '✅ Producto creado exitosamente');
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
        $products= Product::findOrFail($id);
        $categorias = Categoria::all();
        return view('productos.edit', compact('products', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required',
            'categoria_id' => 'required',
            'cantidad' => 'required',
            'precio' => 'required|numeric',
        ]);

        $product= Product::findOrFail($id);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', '✅ Producto actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', '✅ Producto eliminado exitosamente');
    }
}
