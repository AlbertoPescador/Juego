<?php
include_once 'Campeon.php';

class CampeonDB {
    // Añadir campeon en la BBDD
    public static function add(Campeon $c): bool {
        $result = false;

        // Establecemos conexión con la BBDD
        include_once "../Conexion/conexion.php";
        $conexion = Conexion::obtenerConexion();

        // Preparamos la consulta SQL
        $sql = "INSERT INTO campeon (nombre,rol,dificultad,descripcion) VALUES (:nombre, :rol, :dificultad, :descripcion)";

        $sentencia = $conexion->prepare($sql);

        $sentencia->bindValue(":nombre", $c->getNombre());
        $sentencia->bindValue(":rol", $c->getRol());
        $sentencia->bindValue(":dificultad", $c->getDificultad());
        $sentencia->bindValue(":descripcion", $c->getDescripcion());

        return $sentencia->execute();
    }

    // Devuelve el Array de objetos de los Campeones
    public static function getAll() {
        // Establecemos conexión con la BBDD
        include_once "../Conexion/conexion.php";
        $conexion = Conexion::obtenerConexion();

        // Preparamos la consulta SQL
        $sql = "SELECT * FROM campeon";
        $sentencia = $conexion->prepare($sql);

        $sentencia->setFetchMode(PDO::FETCH_CLASS, "Campeon");
        $sentencia->execute();

        return $sentencia->fetchAll();
    }

    // Filtrar campeones por rol
    public static function getByRol($rol) {
        // Establecemos conexión con la BBDD
        include_once "../Conexion/conexion.php";
        $conexion = Conexion::obtenerConexion();

        // Preparamos la consulta SQL
        $sql = "SELECT * FROM campeon WHERE rol = :rol";
        $sentencia = $conexion->prepare($sql);

        $sentencia->bindValue(":rol", $rol);
        $sentencia->execute();

        // Devolvemos la lista de campeones
        return $sentencia->fetchAll(PDO::FETCH_CLASS, "Campeon");
    }

    // Obtener campeón por nombre
    public static function getByNombre($nombre) {
        include_once "../Conexion/conexion.php";
        $conexion = Conexion::obtenerConexion();

        $sql = "SELECT * FROM campeon WHERE nombre = :nombre";
        $sentencia = $conexion->prepare($sql);
        $sentencia->bindValue(":nombre", $nombre);
        $sentencia->setFetchMode(PDO::FETCH_CLASS, "Campeon");
        $sentencia->execute();

        return $sentencia->fetch();
    }

    // Eliminar campeón por ID
    public static function deleteById($id) {
        $result = false;

        // Establecemos conexión con la BBDD
        include_once "../Conexion/conexion.php";
        $conexion = Conexion::obtenerConexion();

        // Preparamos la consulta SQL
        $sql = "DELETE FROM campeon WHERE id = :id";
        $sentencia = $conexion->prepare($sql);
        $sentencia->bindValue(":id", $id, PDO::PARAM_INT);

        // Ejecutamos la eliminación
        $result = $sentencia->execute();

        return $result;
    }

    // Actualizar campeón
    public static function update(Campeon $c): bool {
        $result = false;

        // Establecemos conexión con la BBDD
        include_once "../Conexion/conexion.php";
        $conexion = Conexion::obtenerConexion();

        // Preparamos la consulta SQL
        $sql = "UPDATE campeon SET nombre = :nombre, rol = :rol, dificultad = :dificultad, descripcion = :descripcion WHERE id = :id";

        $sentencia = $conexion->prepare($sql);

        $sentencia->bindValue(":id", $c->getId(), PDO::PARAM_INT);
        $sentencia->bindValue(":nombre", $c->getNombre());
        $sentencia->bindValue(":rol", $c->getRol());
        $sentencia->bindValue(":dificultad", $c->getDificultad());
        $sentencia->bindValue(":descripcion", $c->getDescripcion());

        // Ejecutamos la actualización
        $result = $sentencia->execute();

        return $result;
    }
    // Obtener campeón por ID
    public static function getById($id) {
        include_once "../Conexion/conexion.php";
        $conexion = Conexion::obtenerConexion();

        $sql = "SELECT * FROM campeon WHERE id = :id";
        $sentencia = $conexion->prepare($sql);
        $sentencia->bindValue(":id", $id, PDO::PARAM_INT);
        $sentencia->setFetchMode(PDO::FETCH_CLASS, "Campeon");
        $sentencia->execute();

        return $sentencia->fetch();
    }
}
?>