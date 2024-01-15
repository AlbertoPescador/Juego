<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Campeon</title>
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

    <h2>Insertar Campeon</h2>

    <form action="../Controlador/controla_Insertar.php" method="post">
        <label form="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label form="rol">Rol:</label>
        <input type="text" id="rol" name="rol" required><br>

        <label form="dificultad">Dificultad:</label>
        <input type="text" id="dificultad" name="dificultad" required><br>

        <label form="descripcion">Descripcion</label>
        <textarea id="descripcion" name="descripcion" rows="4" cols="50" required></textarea><br>

        <input type="submit" value="Insertar">
    </form>
</body>
</html>