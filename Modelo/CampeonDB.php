<?php
    include_once 'Campeon.php';
    
    class CampeonDB{
        //  Añadir campeon en la BBDD
        public static function add (Campeon $c):bool{
            $result = false;

            //  Establecemos conexión con la BBDD
            include_once "../Conexion/conexion.php";
            $conexion = Conexion::obtenerConexion();

            //  Preparamos la consulta SQL
            $sql = "INSERT INTO campeon (nombre,rol,dificultad,descripcion) VALUES (:nombre, :rol, :dificultad, :descripcion)";

            $sentencia = $conexion -> prepare($sql);

            $sentencia -> bindValue(":nombre",$c->getNombre());
            $sentencia -> bindValue(":rol",$c->getRol());
            $sentencia -> bindValue(":dificultad",$c->getDificultad());
            $sentencia -> bindValue(":descripcion",$c->getDescripcion());


            return $sentencia -> execute();
        }

        //  Devuelve el Array de objetos de los Campeones
        public static function getAll(){
            //  Establecemos conexión con la BBDD
            include_once "../Conexion/conexion.php";
            $conexion = Conexion::obtenerConexion();

            //  Preparamos la consulta SQL
            $sql = "SELECT * FROM campeon";
            $sentencia = $conexion -> prepare($sql);

            $sentencia -> setFecthMode(PDO::FETCH_CLASS,"Campeon");
            $sentencia -> execute();

            return $sentencia -> fetchAll();
        }
    }
?>