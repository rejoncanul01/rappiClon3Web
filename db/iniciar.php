<?php 

    session_start();

    include 'conexion.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $validarLogin = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'");

    if(mysqli_num_rows($validarLogin) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: ../pages/inicio.php");
        exit;
    } else{
        echo '
            <script>
                alert("El usuario no existe, verifica los datos introducidos");
                window.location = "../index.php";
            </script>
        ';
        exit;
    }
?>