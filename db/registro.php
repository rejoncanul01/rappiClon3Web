<?php

include 'conexion.php';

$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$cumpleanos = $_POST['cumpleanos'];
$contrasena = $_POST['contrasena'];

$contrasena = hash('sha512', $contrasena);



$query = "INSERT INTO usuarios(usuario, correo, telefono, cumpleanos, contrasena) VALUES('$usuario','$correo', '$telefono', '$cumpleanos', '$contrasena')"; 

$verificarCorreo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' ");

if(mysqli_num_rows($verificarCorreo) > 0) {
    echo '
        <script>
            alert("El coreo que intentas ingresar ya esta registrado, intenta con otro diferente");
            window.location = "../users/login.php"
        </script>
    ';
    exit();
}

$verificarUsuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' ");

if(mysqli_num_rows($verificarUsuario) > 0) {
    echo '
        <script>
            alert("El usuario que intentas ingresar ya esta registrado, intenta con otro diferente");
            window.location = "../users/login.php"
        </script>
    ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../users/login.php"
        </script>
    ';
} else {
    echo '<script>
            alert("Intentalo nuevamente");
            window.location = "../users/login.php"
        </script>
    ';
}

mysqli_close($conexion);
?>