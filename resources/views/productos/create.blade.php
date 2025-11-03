@extends('components.layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-100 py-10 px-4">
    <div class="bg-white border border-gray-200 shadow-md rounded-xl w-full max-w-lg p-6">
        <h1 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">🛍️ Agregar nuevo producto</h1>

        {{-- Mostrar errores --}}
        @if ($errors->any())
            <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-3 mb-4 rounded">
                <ul class="list-disc pl-4 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Formulario --}}
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <div>
                <label class="block text-gray-700 font-medium mb-1">Nombre del producto</label>
                <input type="text" name="nombre"
                       class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-gray-600" required>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Descripción</label>
                <textarea name="descripcion" rows="2"
                          class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-gray-600"></textarea>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Categoría</label>
                <select name="categoria_id"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-gray-600" required>
                    <option value="">Seleccione...</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Cantidad</label>
                    <input type="number" name="cantidad"
                           class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-gray-600" required>
                </div>
                <div>
                    <label class="block text-gray-700 font-medium mb-1">Precio</label>
                    <input type="number" step="0.01" name="precio"
                           class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-gray-600" required>
                </div>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Imagen</label>
                <input type="file" name="imagen"
                       class="block w-full text-sm text-gray-600 border border-gray-300 rounded-md px-2 py-1 focus:ring-2 focus:ring-gray-600">
            </div>

            <div class="flex justify-between items-center pt-4 border-t border-gray-200">
                <a href="{{ route('products.index') }}"
                   class="px-4 py-2 bg-gray-200 text-gray-700 font-medium rounded-md hover:bg-gray-300 transition text-sm">
                    ←
                </a>
                <button type="submit"
                        class="px-5 py-2 bg-gray-800 text-white text-sm font-semibold rounded-md hover:bg-gray-900 transition">
                    Guardar producto
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
