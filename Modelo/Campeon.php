<?php
    class Campeon{
        //  Atributos de la clase
        private int $id;
        private string $nombre;
        private string $rol;
        private string $dificultad;
        private string $descripcion;

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

        //  Atributo -> rol
        //  Get
        public function getRol()
        {
            return $this->rol;
        }
        //  Set
        public function setRol($rol)
        {
            $this->rol = $rol;

            return $this;
        }

        //  Atributo -> dificultad
        //  Get
        public function getDificultad()
        {
            return $this->dificultad;
        }

        //  Set
        public function setDificultad($dificultad)
        {
            $this->dificultad = $dificultad;

            return $this;
        }

        //  Atributo -> descripcion
        //  Get
        public function getDescripcion()
        {
            return $this->descripcion;
        }

        //  Set
        public function setDescripcion($descripcion)
        {
            $this->descripcion = $descripcion;

            return $this;
        }
    }
?>