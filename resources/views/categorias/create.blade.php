@extends('components.layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-100 py-10 px-4">
    <div class="bg-white border border-gray-200 shadow-md rounded-xl w-full max-w-lg p-6">
        <h1 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">🛍️ Agregar nueva categoría</h1>

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
        <form action="{{ route('categorias.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf


<div>
                <label class="block text-gray-700 font-medium mb-1">Nombre de la categoría</label>
                <input type="text" name="nombre"
                       class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-gray-600" required>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Estado</label>
                <select name="estado"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-gray-600" required>
                    <option value="">Seleccione...</option>
                    <option value="activo">Activo</option>
                    <option value="inactivo">Inactivo</option>
                </select>

                


   

<div class="flex justify-between items-center pt-4 border-t border-gray-200">
                <a href="{{ route('categorias.index') }}"
                   class="px-4 py-2 bg-gray-200 text-gray-700 font-medium rounded-md hover:bg-gray-300 transition text-sm">
                    ←
                </a>
                <button type="submit"
                        class="px-5 py-2 bg-gray-800 text-white text-sm font-semibold rounded-md hover:bg-gray-900 transition">
                    Guardar categoría
                </button>
            </div>
</form>

@endsection
