<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="../assets/img/logo.png"
                    style="width: 185px;" alt="logo">
                    <h3>Registro</h3>
                </div>

                <form action="../db/registro.php" method="POST" class="formulario_login">
                    <div class="form-outline mb-4">
                        <input type="text" id="form2Example11" class="form-control"
                        placeholder="Usuario" name="usuario" />
                    </div>
                    <div class="form-outline mb-4">
                        <input type="email" id="form2Example11" class="form-control"
                        placeholder="Correo" name="correo" />
                    </div>
                    <div class="form-outline mb-4">
                        <input type="tel" id="form2Example11" class="form-control"
                        placeholder="Telefono" name="telefono" />
                    </div>
                    <div class="form-outline mb-4">
                        <input type="date" id="form2Example11" class="form-control"
                        placeholder="Cunpleaños" name="cumpleanos" />
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" placeholder="Contraseña" id="form2Example22" class="form-control" name="contrasena" />
                    </div>

                  

                  <div class="text-center pt-1 mb-5 pb-1">
                      <button class="boton">Iniciar</button>
                      <p>Al registrarse, acepta los terminos y condiciones</p>
                    <!-- <a class="text-muted" href="forgotPassword.php">Olvidaste tu contraseña?</a> -->
                  </div>

                  <!-- <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">No tienes una cuenta?</p>
                    <a type="button" class="btn btn-outline-danger" href="signUp.php">Registrate</a>
                   <button type="button" class="btn btn-outline-danger">Registrate</button>
                  </div> -->

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div>
                <img style="height: 800px; width: 537px;" src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?q=80&w=1681&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Login">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- <main>
        <div class="contenedor_registro">
            <form action="../db/registro.php" method="POST" class="formulario_registro">
                <h1>Registro</h1>
                <input type="text" placeholder="Usuario" name="usuario">
                <input type="email" placeholder="Correo" name="correo">
                <input type="tel" placeholder="Telefono" name="telefono">
                <input type="date" placeholder="Cumpleaños" name="cumpleanos">
                <input type="password" placeholder="Contraseña" name="contrasena">
                <button>Registro</button>
            </form>
        </div>
    </main> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>