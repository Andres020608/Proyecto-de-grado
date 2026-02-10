<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Categoría</title>
     <script src="https://cdn.tailwindcss.com"></script>
     <body class="bg-gray-100 min-h-screen flex items-center justify-center py-8">
</head>
<body>

     <div class="bg-white shadow-md border border-gray-200 rounded-xl w-full max-w-lg p-6">
        <h1 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">✏️ Editar Categoría</h1>

        @if ($errors->any())
            <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-3 mb-4 rounded">
                <ul class="list-disc pl-4 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

         <form action="{{ route('categorias.update', $categoria->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')
    

    

     <div>
                <label class="block text-gray-700 font-medium mb-1">Nombre</label>
                <input type="text" name="nombre" value="{{ $categoria->nombre }}" required
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-gray-600">
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-1">Estado</label>
                <select name="estado" required>
                    <option value="activo" {{ $categoria->estado == 'activo' ? 'selected' : '' }}>Activo</option>
                    <option value="inactivo" {{ $categoria->estado == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                </select><br><br>
                
<div class="flex justify-between items-center pt-4 border-t border-gray-200">
                <a href="{{ route('categorias.index') }}"
                    class="px-4 py-2 bg-gray-200 text-gray-700 font-medium rounded-md hover:bg-gray-300 transition text-sm">
                    ← 
                </a>
                <button type="submit"
                    class="px-5 py-2 bg-gray-800 text-white text-sm font-semibold rounded-md hover:bg-gray-900 transition">
                    Actualizar
                </button>
            </div>
        

    </form>

    
</body>
</html>
