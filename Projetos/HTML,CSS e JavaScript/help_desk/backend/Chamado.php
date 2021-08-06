<?php 
    class Chamado{
        private $titulo;
        private $categoria;
        private $descricao;

        public function __set($name, $value)
        {
            $this->$name = $value;
        }
        public function __get($name)
        {
            return $this->$name;
        }

        



    }


?>