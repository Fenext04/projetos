<?php 
    require("Usuario.php");
    require("Conexao.php");
   
        $conexao = new Conexao();
        $usuario = new Usuario();

        $usuario->__set("email",$_POST['email']);
        $usuario->__set("senha",$_POST['senha']);


        $query2 = "INSERT INTO usuarios(email,senha) values
            (:email, :senha);
         ";
         $stmt = $conexao->conectar()->prepare($query2);
         $stmt->bindValue(':email',$usuario->__get("email"));
         $stmt->bindValue(':senha',$usuario->__get("senha"));   
         $stmt->execute(); 
         header("Location: ../cadastro.php?acao=cadastrado");  
        
   
?>