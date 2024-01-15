<?php
    include_once '../Modelo/CampeonDB.php';

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
        $idCampeonAModificar = $_GET["id"];

        // Obtener el campeón por ID
        $campeonAModificar = CampeonDB::getById($idCampeonAModificar);

        if (!$campeonAModificar) {
            echo "Campeón no encontrado.";
            exit;
            }
    } else {
        echo "Solicitud no válida.";
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Campeón</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    ?>
        <h1>Modificar Campeón</h1>
    <form action="../Controlador/controla_Guardado.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $campeonAModificar->getId(); ?>">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $campeonAModificar->getNombre(); ?>" required>

        <label for="rol">Rol:</label>
        <input type="text" id="rol" name="rol" value="<?php echo $campeonAModificar->getRol(); ?>" required>

        <label for="dificultad">Dificultad:</label>
        <input type="text" id="dificultad" name="dificultad" value="<?php echo $campeonAModificar->getDificultad(); ?>" required>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required><?php echo $campeonAModificar->getDescripcion(); ?></textarea>

        <input type="submit" value="Guardar cambios">
    </form>
    <?php
        }
    ?>
</body>
</html>
