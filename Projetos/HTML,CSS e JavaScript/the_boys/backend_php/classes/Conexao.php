<?php 

    class Conexao{
        private $dns = "mysql:host=localhost;dbname=personagens";
        private $usuario = "root";
        private $senha = "";
        
        public function conectar(){
            $conexao = new PDO($this-> dns,$this-> usuario,$this-> senha);

            return  $conexao;
        }
    }    
  
    
   
    
    
?>