<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Este codigo esta hecho por Camilo Fernandez Astaiza -->
    <!-- Se añade documentación de cada parte del código para que mis compañeros no se pierdan (la doc se hace por encima/lado del código)-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> <!--Vincular los logotipos de redes sociales-->

    <link rel="icon" href="{{ asset('Images/imageSinCALIDAD (1).png') }}" type="image/png"> <!--Icono de pestaña-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ballet:opsz@16..72&family=Dancing+Script:wght@400..700&family=Monsieur+La+Doulaise&display=swap" rel="stylesheet"> <!-- Vinculación tipo de letra que bajé de google fonts -->
    
    <link rel="stylesheet" href="{{ asset('css/Registro.css') }}"> <!-- Vinculación con hoja de estilos -->
    <title>Registrate</title>
</head>
<body>
    <video src="{{ asset('Video/LeRose.mp4') }}" autoplay muted loop id="VideoFondo" type="video.mp4"> <!-- Video del fondo-->
    </video>

    <header>
        <a href="{{ route('home') }}" class="logo"> <!-- Logo -->
            <h1>Jesica Joyeria</h1>
        </a>

        <!-- Botón hamburguesa -->
        <div class="menu-toggle" id="menu-toggle">
            &#9776; <!-- Este es el icono de tres líneas -->
        </div>

        <nav id="nav"> <!-- Barra de navegación -->
            <ul>
                <li><a href="{{ route('home') }}">Sitio</a></li> <!-- Links nav-->
                <li><a href="#">Contactanos</a></li> <!-- Links nav-->
                <li><a href="#">Ayuda</a></li> <!-- Links nav-->
                <li><a href="{{ route('login') }}" id="registrate">Inicia Sesión</a></li> <!-- Se conecta con la pagina de inicio de sesion-->
            </ul>
        </nav>
    </header>

    <main>
        <div class="logo-contenedor"> <!--Logo arriba del formulario-->
            <img src="{{ asset('Images/image.png') }}" alt="Logo imagen" id="central">
        </div>
        
        <!--Formulario de Registro con Laravel Auth-->
        <section class="contenedor-form">
            <div class="tarjeta-formulario">
                <h1 id="iniciarsesion">Registro</h1> <!--Titulo-->
                
                {{-- 
                    Formulario de registro de Laravel:
                    - action: Envía los datos a la ruta 'register' definida en routes/auth.php
                    - method: POST es requerido para enviar datos de forma segura
                --}}
                <form action="{{ route('register') }}" method="POST">
                    {{-- 
                        @csrf: Token de seguridad CSRF (Cross-Site Request Forgery)
                        Protege contra ataques de falsificación de peticiones entre sitios
                        Laravel valida este token automáticamente en cada petición POST
                    --}}
                    @csrf
                    
                    <!-- Campo de Nombre Completo -->
                    <div class="grupo-formulario">
                        <label for="name">Nombre completo</label> <!--1ra casilla-->
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                        {{-- Muestra errores de validación para el campo name --}}
                        @error('name')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <!-- Campo de Correo Electrónico -->
                    <div class="grupo-formulario">
                        <label for="email">Correo Electronico</label> <!--2da casilla-->
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="username">
                        {{-- Muestra errores de validación para el campo email --}}
                        @error('email')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Campo de Contraseña -->
                    <div class="grupo-formulario">
                        <label for="password">Contraseña</label> <!--3ra casilla-->
                        <input type="password" id="password" name="password" required autocomplete="new-password">
                        {{-- Muestra errores de validación para el campo password --}}
                        @error('password')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Campo de Confirmar Contraseña -->
                    <div class="grupo-formulario">
                        <label for="password_confirmation">Repetir contraseña</label> <!--4ta casilla-->
                        {{-- 
                            IMPORTANTE: type="password" para ocultar la contraseña
                            name="password_confirmation" es requerido por Laravel para validar que coincidan
                        --}}
                        <input type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                        @error('password_confirmation')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <button type="submit">Registrarse</button> <!--Boton para enviar-->
                    <p class="register-text"> 
                        ¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia Sesión</a> <!--Se conecta con la pagina de inicio de sesion-->
                    </p>
                </form>
            </div>
        </section>
    </main>

    <!-- Pie de pagina -->
    <footer>
        <div class="footer-content">
            <p>&copy; 2025 Jesica Joyería. Todos los derechos reservados.</p>
            <div class="social-icons"> <!--Iconos de redes sociales-->
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
                <a href="#" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/menu.js') }}"></script> <!--Link con script js para el menu hamburguesa (menu.js)-->
</body>
</html>