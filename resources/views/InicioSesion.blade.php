<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Este codigo esta hecho por Camilo Fernandez Astaiza -->
    <!-- Se añade documentación de cada parte del código para que mis compañeros no se pierdan (la doc se hace por encima/lado del código)-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> <!--Vincular los logotipos de redes sociales-->

    <link rel="icon" href="Images/imageSinCALIDAD (1).png" type="image/png"> <!--Icono de pestaña-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ballet:opsz@16..72&family=Dancing+Script:wght@400..700&family=Monsieur+La+Doulaise&display=swap" rel="stylesheet"> <!-- Vinculación tipo de letra que bajé de google fonts -->
    
    <link rel="stylesheet" href="{{ asset('css/InicioSesion.css') }}"><!-- Vinculación con hoja de estilos -->
    <title>Iniciar Sesión</title>
</head>
<body>
    <video src="Video/LeRose.mp4" autoplay muted loop id="VideoFondo" type="video.mp4"> <!-- Video del fondo-->
    </video>

    <header>
        <a href="#" class="logo"> <!-- Logo -->
            <h1>Jesica Joyeria</h1>
        </a>

        <!-- Botón hamburguesa -->
        <div class="menu-toggle" id="menu-toggle">
            &#9776; <!-- Este es el icono de tres líneas -->
        </div>
        <nav id="nav"> <!-- Barra de navegación -->
            <ul>
                <li><a href="#">Sitio</a></li> <!-- Links nav-->
                <li><a href="#">Contactanos</a></li> <!-- Links nav-->
                <li><a href="#">Ayuda</a></li> <!-- Links nav-->
                <li><a href="{{ route('Registrarse') }}" id="registrate">Registrate</a></li> <!-- Se conecta con la pagina de registro-->
            </ul>
        </nav>
    </header>

    <main>
        <div class="logo-contenedor"> <!--Logo arriba del formulario-->
            <img src="Images/image.png" alt="Logo imagen" id="central">
        </div>

        <!--Formulario-->
        <section class="contenedor-form">
            <div class="tarjeta-formulario">
                <h1 id="iniciarsesion">Iniciar Sesión</h1>
                <form action="" method="post">
                <div class="grupo-formulario">
                    <label for="email">Correo Electronico</label>
                    <input type="text" id="email" name="email" required>
                </div>

                <div class="grupo-formulario">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Ingresar</button>
                <p class="register-text">
                    ¿No tienes cuenta? <a href="{{ route('Registrarse') }}">Regístrate</a> <!--Se conecta con la pagina de registro-->
                </p>
            </form>
            </div>
        </section>
    </main>

    <!-- Pie de pagina -->
    <footer>
    <div class="footer-content">
        <p>&copy; 2025 Jesica Joyería. Todos los derechos reservados.</p>
        <div class="social-icons">
            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
            <a href="#" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>
</footer>
<script src="js/menu.js"></script> <!--Link con script js para el menu hamburguesa (menu.js)-->
</body>
</body>
</html>