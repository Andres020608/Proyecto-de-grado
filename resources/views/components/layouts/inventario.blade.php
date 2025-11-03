<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard - Jessica Joyería' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('images/icono.png') }}">
</head>

<body class="bg-gray-100 min-h-screen flex font-sans">

     {{-- Sidebar  --}}
    <aside class="w-64 text-white flex flex-col p-6 shadow-lg bg-gradient-to-b from-[#1A2437] to-[#0E1625]">
        <h1 class="text-2xl font-bold mb-10 text-center tracking-wide">Jessica Joyería</h1>

        <nav class="flex flex-col gap-3 text-sm font-medium">
            <a href="{{ route('dashboard') }}"
               class="flex items-center gap-3 px-3 py-2 rounded-md transition hover:bg-[#25314A]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6" />
                </svg>
                Dashboard
            </a>

            <a href="{{ route('products.index') }}"
               class="flex items-center gap-3 px-3 py-2 rounded-md transition hover:bg-[#25314A]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M20 13V7a2 2 0 00-2-2H6a2 2 0 00-2 2v6m16 0a2 2 0 01-2 2H6a2 2 0 01-2-2m16 0v6a2 2 0 01-2 2H6a2 2 0 01-2-2v-6" />
                </svg>
                Productos
            </a>

            <a href="{{ route('categorias.index') }}"
               class="flex items-center gap-3 px-3 py-2 rounded-md transition hover:bg-[#25314A]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                </svg>
                Categorías
            </a>

            <a href="{{ route('provedor.index') }}"
               class="flex items-center gap-3 px-3 py-2 rounded-md transition hover:bg-[#25314A]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                </svg>
                Proveedores
            </a>
        </nav>

        <div class="mt-auto text-center text-xs text-gray-400 pt-10 border-t border-gray-700">
            &copy; {{ date('Y') }} Jessica Joyería
        </div>
    </aside>

     {{-- Contenido principal  --}}
    <main class="flex-1 bg-gray-100 p-8">
        <div class="bg-white rounded-lg shadow-lg p-8">
            @yield('content')
        </div>
    </main>

</body>
</html>
