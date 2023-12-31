<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<section class="vh-100" style="background-color: #Ff8000;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <br><br>
            <div class="text-center">
                  <img src="../assets/img/logo.png"
                    style="width: 185px;" alt="logo">
                </div>
          <h3>Recuper contraseña</h3>
          <h6>Ingresa tu correo para crear una contraseña</h6>

            <br><br>

            <div class="form-outline mb-4">
              <input type="email" id="typeEmailX-2" class="form-control form-control-lg" placeholder="correo" />
            </div>

              <a class="boton" id="alerta" href="login.php" role="button">
                  Enviar
              </a>

              <script>
                document.getElementById("alerta").addEventListener("click", function() {
                    alert("Tu contraseña se restablecio con exito: En breve recibiras un correo con un codigo para configurar tu nueva contraseña"); // Muestra una alerta cuando se hace clic en el botón
                });
              </script>


            <!-- <button class="boton" type="submit" href="../users/login.php" >Enviar</button> -->

            <br><br><br><br><br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>