<?php
    class Usuario{
        //  Atributos de la clase
        private int $id;
        private string $nombre;
        private string $usuario;
        private string $password;
        private string $email;

        //  Propiedades
        //  Atributo -> id
        //  Get
        public function getId()
        {
            return $this->id;
        }

        //  Atributo -> nombre
        //  Get
        public function getNombre()
        {
            return $this->nombre;
        }
        //  Set
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;

            return $this;
        }

        //  Atributo -> usuario
        //  Get
        public function getUsuario()
        {
            return $this->usuario;
        }
        //  Set
        public function setUsuario($usuario)
        {
            $this->usuario = $usuario;

            return $this;
        }

        //  Atributo -> password
        //  Get
        public function getPassword()
        {
            return $this->password;
        }

        //  Set
        public function setPassword($password)
        {
            $this->password = $password;

            return $this;
        }

        //  Atributo -> email
        //  Get
        public function getEmail()
        {
            return $this->email;
        }

        //  Set
        public function setEmail($email)
        {
            $this->email = $email;

            return $this;
        }
    }
?>