<?php 
    class Conexao{
        public $dns = "mysql:host=localhost;dbname=helps_desk";
        public $usuario = "root";
        public $senha = "";


        public function conectar(){
            $pdo = new PDO($this->dns,$this->usuario,$this->senha,array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"));
            return $pdo;


    }
    }


?>