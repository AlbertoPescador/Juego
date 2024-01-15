<?php
    include_once "../Modelo/CampeonDB.php";
    include "../Vista/form_Mostrar.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rolFiltrado = $_POST["rol_filtro"];

        if ($rolFiltrado == "") {
            $campeones = CampeonDB::getAll();
        } else {
            $campeones = CampeonDB::getByRol($rolFiltrado);
        }
    } else {
        $campeones = CampeonDB::getAll();
    }
?>

<h1>Lista de campeones</h1>

<?php
    // Mostrar la lista de campeones
    echo "<hr>";
    foreach ($campeones as $campeon) {
        echo "<h3>Nombre</h3>" . $campeon->getNombre();
        echo "<h3>Rol</h3>" . $campeon->getRol();
        echo "<h3>Dificultad</h3>" . $campeon->getDificultad();
        echo "<h3>Descripción</h3>" . $campeon->getDescripcion();
        echo "<hr>";
    }
?>