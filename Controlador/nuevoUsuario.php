<?php
    include_once "../Modelo/UsuarioDB.php";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        // Recoger los datos del formulario
        $nombre = $_POST["nombre"];
        $usuario = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];

        // Crear una instancia de la clase Usuario
        $nuevoUsuario = new Usuario();
        $nuevoUsuario->setNombre($nombre);
        $nuevoUsuario->setUsuario($usuario);
        $nuevoUsuario->setPassword($password);
        $nuevoUsuario->setEmail($email);

        // Intentar registrar el nuevo usuario
        $usuarioDB = new UsuarioDB();
        if ($usuarioDB->add($nuevoUsuario)) {
            // Registro exitoso, redirigir a la página de inicio de sesión
            echo '<script>alert("Usuario registrado correctamente. ¡Bienvenido! Ahora puedes iniciar sesión.");</script>';
            echo '<script>window.location.href="../Vista/form_IniciarSesion.php";</script>';
            exit();
        } else {
            // Error en el registro
            echo "Hubo un error al registrar el usuario.";
        }
    }
?>