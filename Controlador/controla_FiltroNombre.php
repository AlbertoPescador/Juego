<?php
    include_once "../Modelo/CampeonDB.php";
    include "../Vista/form_FiltroNombre.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombreBusqueda = $_POST["nombre"];

        // Obtener el campeón por nombre
        $campeonEncontrado = CampeonDB::getByNombre($nombreBusqueda);
?>
    <h1>Datos del campeon:</h1>
    <?php
        if ($campeonEncontrado) {
            echo "<p>Nombre: " . $campeonEncontrado->getNombre() . "</p>";
            echo "<p>Rol: " . $campeonEncontrado->getRol() . "</p>";
            echo "<p>Dificultad: " . $campeonEncontrado->getDificultad() . "</p>";
            echo "<p>Descripción: " . $campeonEncontrado->getDescripcion() . "</p>";

            // Agregar enlaces para modificar y eliminar
            echo "<a href='controla_Guardado.php?id=" . $campeonEncontrado->getId() . "'>Modificar</a>";
            echo "<a href='controla_Eliminar.php?id=" . $campeonEncontrado->getId() . "'>Eliminar</a>";
        } else {
            echo "<p>No se encontró ningún campeón con ese nombre.</p>";
        }
    ?>
<?php
    }
?>