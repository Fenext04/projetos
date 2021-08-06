<?php 
    class Usuario{
        private $email;
        private $senha;

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