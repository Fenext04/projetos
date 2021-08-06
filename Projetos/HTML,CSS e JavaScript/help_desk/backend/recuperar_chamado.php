<?php 
    require("Conexao.php");
    require("chamado.php");



    $conexao = new Conexao();

    $chamado = new Chamado;

    $email = $_SESSION["Email"];
    $query = "SELECT id FROM `usuarios` WHERE email = '$email'";

    $stmt = $conexao->conectar()->query($query);
    $id = $stmt->fetch(PDO::FETCH_ASSOC);
    $id_texto = $id["id"];

    $query2 = "SELECT * FROM `chamados` WHERE chamado_do_usuario = $id_texto;";
    $stmt2 = $conexao->conectar()->query($query2);
    $lista_chamadas = $stmt2->fetchAll(PDO::FETCH_OBJ);
    

?>