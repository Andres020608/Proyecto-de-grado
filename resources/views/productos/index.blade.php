@extends('components.layouts.inventario')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-xl font-semibold mb-6 text-gray-800">Lista de Productos</h1>
        <a href="{{ route('products.create') }}"
           class="bg-gray-800 text-white px-4 py-2 rounded-md hover:bg-gray-900 transition flex items-center gap-2">
           <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
               <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
           </svg>
           Nuevo Producto
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-50 border-l-4 border-green-600 text-green-700 p-3 mb-6 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border border-gray-300 rounded-lg overflow-hidden text-center">
        <thead class="bg-gray-200">
            <tr>
                <th class="p-3 text-sm font-semibold text-gray-700 text-center">ID</th>
                <th class="p-3 text-sm font-semibold text-gray-700 text-center">Nombre</th>
                <th class="p-3 text-sm font-semibold text-gray-700 text-center">Descripción</th>
                <th class="p-3 text-sm font-semibold text-gray-700 text-center">Categoría</th>
                <th class="p-3 text-sm font-semibold text-gray-700 text-center">Imagen</th>
                <th class="p-3 text-sm font-semibold text-gray-700 text-center">Cantidad</th>
                <th class="p-3 text-sm font-semibold text-gray-700 text-center">Precio</th>
                <th class="p-3 text-sm font-semibold text-gray-700 text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr class="border-t hover:bg-gray-100 transition">
                    <td class="p-3">{{ $product->id }}</td>
                    <td class="p-3 font-medium text-gray-800">{{ $product->nombre }}</td>
                    <td class="p-3 text-gray-700">{{ $product->descripcion ?? '-' }}</td>
                    <td class="p-3 text-gray-700">{{ $product->categoria->nombre ?? '-' }}</td>
                    <td class="p-3 flex justify-center">
                        @if ($product->imagen)
                            <img src="{{ asset('storage/' . $product->imagen) }}" alt="Imagen"
                                 class="w-16 h-16 object-cover rounded border border-gray-200">
                        @else
                            <img src="{{ asset('images/placeholder.png') }}" alt="Sin imagen"
                                 class="w-16 h-16 object-cover rounded border border-gray-200">
                        @endif
                    </td>
                    <td class="p-3 text-gray-700">{{ $product->cantidad }}</td>
                    <td class="p-3 text-gray-700">${{ number_format($product->precio, 2) }}</td>
                    <td class="p-3 flex justify-center gap-3">
                        <a href="{{ route('products.edit', $product->id) }}"
                           class="text-gray-700 hover:text-gray-900 transition p-1 rounded bg-gray-200 hover:bg-gray-300"
                           title="Editar">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z" />
                            </svg>
                        </a>

                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline"
                              onsubmit="return confirm('¿Eliminar este producto?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="text-white bg-gray-700 hover:bg-gray-900 p-1 rounded transition"
                                    title="Eliminar">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2h12a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM4 7a1 1 0 011 1v9a2 2 0 002 2h6a2 2 0 002-2V8a1 1 0 112 0v9a4 4 0 01-4 4H7a4 4 0 01-4-4V8a1 1 0 011-1z"
                                          clip-rule="evenodd" />
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="p-4 text-gray-500">No hay productos registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
