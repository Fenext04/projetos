<?php 
     require("personagem.service.php");
     require("Personagem.php");
     require("Conexao.php");

     $personagem = new Personagem();
     $conexao = new Conexao();
    $personagem_service = new PersonagemService($conexao,$personagem);
    $lista_usuarios = $personagem_service->recuperar()
?>