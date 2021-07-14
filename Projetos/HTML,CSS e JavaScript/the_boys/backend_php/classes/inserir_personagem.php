<?php 
    require("personagem.service.php");
    require("Personagem.php");
    require("Conexao.php");
    

    if (empty($_POST["nome"]) or empty($_POST["idade"]) or empty($_POST["interprete"]) or empty($_POST["alinhamento"]) or empty($_POST["biografia"])){
        header("Location: ../../pages/formulario.php?inclusao=2");
        
    }
    else{
        $personagem = new Personagem();
    
        $personagem->__set("nome",$_POST["nome"]);
        $personagem->__set("interprete",$_POST["interprete"]);
        $personagem->__set("idade",$_POST["idade"]);
        $personagem->__set("alinhamento",$_POST["alinhamento"]);
        $personagem->__set("biografia",$_POST["biografia"]);

        $conexao = new Conexao();
        $personagem_service = new PersonagemService($conexao,$personagem);
        $personagem_service->inserir();
        header("Location: ../../pages/formulario.php?inclusao=1");
}
?>