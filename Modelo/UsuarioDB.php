<?php
    include_once "Usuario.php";

    class UsuarioDB {
        public static function add(Usuario $usuario): bool {
            // Establecemos conexión con la BBDD
            include_once "../Conexion/conexion.php";
            $conexion = Conexion::obtenerConexion();

            // Verificar si el usuario ya existe antes de insertar
            if (self::usuarioExiste($usuario->getUsuario())) {
                // Usuario ya existe
                return false;
            }

            // Verificar que no haya campos en blanco
            if (empty($usuario->getNombre()) || empty($usuario->getUsuario()) || empty($usuario->getPassword()) || empty($usuario->getEmail())) {
                return false;
            }

            // Preparamos la consulta SQL
            $sql = "INSERT INTO usuario (nombre, usuario, password, email) VALUES (:nombre, :usuario, :password, :email)";

            $sentencia = $conexion->prepare($sql);

            $sentencia->bindValue(":nombre", $usuario->getNombre());
            $sentencia->bindValue(":usuario", $usuario->getUsuario());
            $sentencia->bindValue(":password", $usuario->getPassword());
            $sentencia->bindValue(":email", $usuario->getEmail());

            // Ejecutar la sentencia y verificar si fue exitosa
            $result = $sentencia->execute();

            // Manejo de errores de PDO
            if (!$result) {
                echo "Error en la ejecución de la sentencia SQL: ";
                print_r($sentencia->errorInfo());
                return false;
            }

            return true;
        }

        // Verificar si el usuario ya existe en la BBDD
        private static function usuarioExiste($usuario): bool {
            // Establecemos conexión con la BBDD
            include_once "../Conexion/conexion.php";
            $conexion = Conexion::obtenerConexion();

            // Preparamos la consulta SQL
            $sql = "SELECT COUNT(*) as count FROM usuario WHERE usuario = :usuario";

            $sentencia = $conexion->prepare($sql);
            $sentencia->bindValue(":usuario", $usuario);
            $sentencia->execute();

            $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);

            return $resultado['count'] > 0;
        }

        //  Autenticar login de usuario
        public function autenticarUsuario($usuario, $contrasena): bool {
            // Establecemos conexión con la BBDD
            include_once "../Conexion/conexion.php";
            $conexion = Conexion::obtenerConexion();
    
            // Preparamos la consulta SQL para obtener el usuario con las credenciales dadas
            $sql = "SELECT * FROM usuario WHERE usuario = :usuario AND password = :password";
            $sentencia = $conexion->prepare($sql);
            $sentencia->bindValue(":usuario", $usuario);
            $sentencia->bindValue(":password", $contrasena);
            $sentencia->execute();
    
            // Comprobamos si se encontró un usuario con las credenciales dadas
            return $sentencia->rowCount() > 0;
        }
    }
?>
