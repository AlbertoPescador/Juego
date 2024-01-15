<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Campeon</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>League of Legends Admin</h1>
    </header>

    <nav>
        <a href="form_Insertar.php">Insertar</a>
        <a href="form_FiltroNombre.php">Filtrar Nombre</a>
        <a href="form_Mostrar.php">Mostrar</a>
    </nav>

    <h2>Buscar Campeon</h2>

    <form action="../Controlador/controla_FiltroNombre.php" method="post">
        <label for="nombre">Buscar por nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <button type="submit">Buscar</button>
    </form>
</body>
</html>