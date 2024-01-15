<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Campeones</title>
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
    
    <h1>Filtro de Campeones</h1>
    <form method="POST" action="../Controlador/controla_Mostrar.php">
        <label for="rol_filtro">Filtrar por Rol:</label>
        <select name="rol_filtro" id="rol_filtro">
            <option value="">Todos</option>
            <option value="Apoyo">Apoyo</option>
            <option value="Asesino">Asesino</option>
            <option value="Tanque">Tanque</option>
            <option value="Luchador">Luchador</option>
            <option value="Tirador">Tirador</option>
        </select>
        <button type="submit">Filtrar</button>
    </form>
</body>
</html>