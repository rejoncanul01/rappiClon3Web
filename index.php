<?php

    session_start();

    if (isset($_SESSION["usuario"])) {
        header("location: pages/inicio.php ");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="icon" href="/assets/img/logo1.png" sizes="192x192">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script>
        if ('ServiceWorker' in navigator) {
            navigator.ServiceWorker.register('/js/service-worker.js')
                .then(registration => console.log('Service Worker registrado con exito:', registration))
                .catch(error => console.error('Error al registrar el service worker', error));
        }
    </script>
</head>
<body style="font-family: Arial, sans-serif; font-weight: bold; color: white; text-align: center;" class="fondoInicio" >
   <main>
   <br>

        <div>
            <h1 style="font-size: 90px;">
                Rappi, comida <br> a tu alcance
            </h1>
            <h3>
                Comida de la region
            </h3>
        </div>

        <br><br>

        <div>
            <a class="boton" href="users/login.php" role="button">
                Iniciar seción
            </a>
            <br>
            <h5 style="font-size: 30;">iniciar con:</h5>
        </div>
   </main>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
