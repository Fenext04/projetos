<?php
    session_start();
    require("Conexao.php");
    require("Usuario.php");


    if(!empty($_POST["email"]) and !empty($_POST["senha"])){

        $conexao = new Conexao();
        $usuario = new Usuario();

        $usuario->__set("email",$_POST["email"]);
        $usuario->__set("senha",$_POST["senha"]);

        $query = "SELECT * from usuarios";    
        $stmt = $conexao->conectar()->query($query);
        $lista = $stmt->fetchAll(PDO::FETCH_OBJ);

        $usuario_logado = false;

        foreach($lista as $value=>$key){
            if ($usuario->__get("email") == $key->email and $usuario->__get("senha") == $key->senha ){
                $usuario_logado = true; 
                
            }
        }
        
        if ($usuario_logado == true){
            $_SESSION["autenticado"] = "sim";
            $_SESSION["Email"] = $usuario->__get("email");
            header("Location: ../home.php");
        }
        else{
            $_SESSION["autenticado"] = "nao";
            header("Location: ../index.php?autenticado=nao");
        }
        
        
}

    else{
        
    }





?>