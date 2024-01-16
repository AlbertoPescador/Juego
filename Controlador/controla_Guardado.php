<?php
    include_once "../Modelo/CampeonDB.php";
    include_once "../Vista/form_Modificar.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idCampeonAModificar = $_POST["id"];
        $nombre = $_POST["nombre"];
        $rol = $_POST["rol"];
        $dificultad = $_POST["dificultad"];
        $descripcion = $_POST["descripcion"];

        // Crear un objeto Campeon con los nuevos datos
        $campeonModificado = new Campeon();
        $campeonModificado->setId($idCampeonAModificar);
        $campeonModificado->setNombre($nombre);
        $campeonModificado->setRol($rol);
        $campeonModificado->setDificultad($dificultad);
        $campeonModificado->setDescripcion($descripcion);

        // Guardar los cambios en la base de datos
        if (CampeonDB::update($campeonModificado)) {
            echo "Campeón modificado correctamente.";
        } else {
            echo "Error al modificar el campeón.";
        }
    } else {
        echo "Solicitud no válida.";
    }
?>