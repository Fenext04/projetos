<?php 
    session_start();
    require("Conexao.php");
    require("Chamado.php");

    $conexao = new Conexao();
    $chamado = new Chamado();


    $chamado->__set("titulo",$_POST["titulo"]);
    $chamado->__set("categoria",$_POST["categoria"]);
    $chamado->__set("descricao",$_POST["descricao"]);

    $email = $_SESSION["Email"];
    $query = "SELECT id FROM `usuarios` WHERE email = '$email'";

    $stmt = $conexao->conectar()->query($query);
    $id = $stmt->fetch(PDO::FETCH_ASSOC);
    $id_texto = $id["id"];

    $query2 = "INSERT INTO chamados(titulo, categoria, descricao,chamado_do_usuario)Values
    (:titulo, :categoria, :descricao,$id_texto);";
    
    $stmt2 = $conexao->conectar()->prepare($query2);
    $stmt2->bindValue(':titulo',$chamado->__get("titulo"));
    $stmt2->bindValue(':categoria',$chamado->__get("categoria"));
    $stmt2->bindValue(':descricao',$chamado->__get("descricao"));
    

    $stmt2->execute();

   header("Location: ../abrir_chamado.php?acao=chamado_enviado");
   



?>