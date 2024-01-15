<?php
    include_once "../Modelo/CampeonDB.php";

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
    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        //  Obtenemos los datos del formulario
        $nombre = $_POST["nombre"];
        $rol = $_POST["rol"];
        $dificultad = $_POST["dificultad"];
        $descripcion = $_POST["descripcion"];

        $newCampeon = new Campeon();
        $newCampeon -> setNombre($nombre);
        $newCampeon -> setRol($rol);
        $newCampeon -> setDificultad($dificultad);
        $newCampeon -> setDescripcion($descripcion);
        
        if(CampeonDB::add($newCampeon)){
            echo "<br>¡Campeon insertado CORRECTAMENTE!<br>";
        }else {
            echo "<br>¡ERROR al insertar el campeon!<br>";
        }
    }
?>