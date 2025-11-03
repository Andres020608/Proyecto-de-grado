<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema Inventario')</title>
    <!-- Tailwind por CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Navbar o sidebar -->
    <nav class="bg-slate-900 p-4 text-white">
        <a href="{{ route('dashboard') }}" class="mr-4">Dashboard</a>
        <a href="{{ route('products.index') }}" class="mr-4">Productos</a>
        <a href="{{ route('categorias.index') }}" class="mr-4">Categorías</a>
        <a href="{{ route('provedor.index') }}" class="mr-4">Proveedores</a>
    </nav>

    <div class="container mx-auto p-6">
        <!-- Aquí se carga el contenido de cada vista -->
        @yield('content')
    </div>

</body>
</html>
