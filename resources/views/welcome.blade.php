<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bienvenido a tu Espacio de Coworking</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .welcome-image {
                max-width: 100%;
                height: 20vh;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <img src="{{ asset('twgrouplogo.png') }}" alt="Espacio de Coworking" class="welcome-image mb-4">

                    <h1 class="mb-4">Bienvenido a tu espacio de trabajo colaborativo</h1>

                    <p>¡Bienvenido a nuestro espacio de trabajo colaborativo! Somos un espacio de trabajo compartido diseñado para ayudarte a ser más productivo y conectado. Ya sea que seas un emprendedor, un profesional independiente o un empleado que trabaja desde casa, nuestro espacio te ofrece todo lo que necesitas para tener éxito.</p>

                    <h2 class="mt-4 mb-3">¿Qué ofrecemos?</h2>

                    <ul>
                        <li><strong>Espacios de trabajo flexibles:</strong> Tenemos una variedad de espacios de trabajo para adaptarse a tus necesidades, desde escritorios privados hasta áreas de colaboración.</li>
                        <li><strong>Conexiones de alta velocidad:</strong> Nuestra conexión a Internet de alta velocidad te permite trabajar sin problemas desde cualquier lugar de nuestro espacio.</li>
                        <li><strong>Comodidades de primera clase:</strong> Disfruta de nuestro café gratis, té y refrigerios, así como de nuestras instalaciones de impresión y escaneo.</li>
                        <li><strong>Comunidad vibrante:</strong> Conoce a otros profesionales y empresas en nuestro espacio y crea nuevas conexiones.</li>
                    </ul>

                    <h2 class="mt-4 mb-3">¿Cómo empezar?</h2>

                    <p>Si ya eres miembro, inicia sesión a continuación. Si aún no eres miembro, regístrate para crear una cuenta y comenzar a disfrutar de los beneficios de nuestro espacio de trabajo.</p>

                    <div class="mt-4">
                        <a href="{{ route('login') }}" class="btn btn-primary me-2">Iniciar sesión</a>
                        <a href="{{ route('register') }}" class="btn btn-secondary">Registrarse</a>
                    </div>

                    <p class="mt-4">¡Esperamos verte pronto!</p>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>