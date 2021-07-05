

<?php
    
    include("conexao.php");
    $nome = $_POST["nome"];
    $interprete = $_POST["interprete"];
    $idade = $_POST["idade"];
    $alinhamento = $_POST["alinhamento"];
    $biografia = $_POST["biografia"];

    

    $query = "
        insert into personagens_tabela(nome,idade,interprete,alinhamento,biografia) value('$nome','$idade','$interprete','$alinhamento','$biografia')
    
    ";

    $stmt = $conexao->query($query);
    header("location: ../../pages/formulario.php")
?>