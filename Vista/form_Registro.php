<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input.submit {
            background-color: green;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input.submit:hover {
            background-color: grey;
        }
    </style>
</head>
<body>

    <form method="post" action="../Controlador/nuevoUsuario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="username">Usuario:</label>
        <input type="text" name="username" required>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>
        
        <label for="email">Email:</label>
        <input type="text" name="email" required>

        <input type="submit" class="submit" value="Registrar">
    </form>

</body>
</html>