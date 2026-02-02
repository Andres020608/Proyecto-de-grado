<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center py-8">

    <div class="bg-white shadow-md border border-gray-200 rounded-xl w-full max-w-lg p-6">
        <h1 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">✏️ Editar Producto</h1>

        @if ($errors->any())
            <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-3 mb-4 rounded">
                <ul class="list-disc pl-4 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.update', $products->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-gray-700 font-medium mb-1">Nombre</label>
                <input type="text" name="nombre" value="{{ $products->nombre }}" required
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-gray-600">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Descripción</label>
                <textarea name="descripcion" rows="2"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-gray-600">{{ $products->descripcion }}</textarea>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Categoría</label>
                <select name="categoria_id" required
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-gray-600">
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ $products->categoria_id == $categoria->id ? 'selected' : '' }}>
                            {{ $categoria->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Cantidad</label>
                    <input type="number" name="cantidad" value="{{ $products->cantidad }}" required
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-gray-600">
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Precio</label>
                    <input type="number" step="0.01" name="precio" value="{{ $products->precio }}" required
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-gray-600">
                </div>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Imagen</label>

                @if ($products->imagen)
                    <div class="flex items-center gap-3 mb-2">
                        <img src="{{ asset('storage/' . $products->imagen) }}" alt="Imagen actual"
                            class="w-16 h-16 object-cover rounded border border-gray-300">
                        <span class="text-sm text-gray-500">Imagen actual</span>
                    </div>
                @endif

                <input type="file" name="imagen"
                    class="block w-full text-sm text-gray-600 border border-gray-300 rounded-md px-2 py-1 focus:ring-2 focus:ring-gray-600">
            </div>

            <div class="flex justify-between items-center pt-4 border-t border-gray-200">
                <a href="{{ route('products.index') }}"
                    class="px-4 py-2 bg-gray-200 text-gray-700 font-medium rounded-md hover:bg-gray-300 transition text-sm">
                    ← Cancelar
                </a>
                <button type="submit"
                    class="px-5 py-2 bg-gray-800 text-white text-sm font-semibold rounded-md hover:bg-gray-900 transition">
                    Guardar cambios
                </button>
            </div>
        </form>
    </div>

</body>
</html>
