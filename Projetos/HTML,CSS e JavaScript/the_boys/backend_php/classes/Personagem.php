<?php
    
    class Personagem{
        private $nome = null;
        private $interprete = null;
        private $idade = null;
        private $alinhamento = null;
        private $biografia = null;


        public function __get($atributo)
        {
            return $this->$atributo;
        }
        public function __set($atributo, $valor)
        {
            $this->$atributo = $valor;
        }
    }

?>