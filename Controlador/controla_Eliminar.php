<?php
include_once "../Modelo/CampeonDB.php";

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
        $idCampeonAEliminar = $_GET["id"];

        // Intentamos eliminar el campeón
        if (CampeonDB::deleteById($idCampeonAEliminar)) {
            echo "Campeón eliminado correctamente.";
        } else {
            echo "Error al eliminar el campeón.";
        }
    } else {
        echo "Solicitud no válida.";
    }
?>