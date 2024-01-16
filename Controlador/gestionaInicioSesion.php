<?php
    include_once "../Modelo/UsuarioDB.php";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Recoger los datos del formulario
        $usuario = $_POST["username"];
        $contrasena = $_POST["password"];

        // Realizar la autenticación (puedes modificar esta lógica según tu implementación)
        $usuarioDB = new UsuarioDB();
        $autenticado = $usuarioDB->autenticarUsuario($usuario, $contrasena);

        if ($autenticado) {
            // Inicio de sesión exitoso, redirigir a la página de inicio
            echo '<script>alert("Sesion iniciada correctamente. ¡Bienvenido!");</script>';
            echo '<script>window.location.href="../Vista/indice.php";</script>';
            exit();
        } else {
            // Error en la autenticación, mostrar mensaje o redirigir a página de error
            echo "Error en el inicio de sesión. Verifica tus credenciales.";
        }
    }
?>