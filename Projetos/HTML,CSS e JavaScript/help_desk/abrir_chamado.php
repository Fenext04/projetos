<?php
session_start();

if(!isset($_SESSION["autenticado"]) or $_SESSION["autenticado"] == "nao"){
  header("Location: index.php?autenticado=nao");
}
  
  
 
  
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <a href="backend/logoff.php" style="color: white">Sair</a>
      
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Abertura de chamado
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form action="backend/criar_chamado.php" method="POST">
                    <div class="form-group">
                      <label>Título</label>
                      <input type="text" class="form-control" name="titulo" placeholder="Título" maxlength="50" required name= titulo>
                    </div>
                    
                    <div class="form-group">
                      <label>Categoria</label>
                      <select class="form-control" name = "categoria">
                        <option>Criação Usuário</option>
                        <option>Impressora</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Rede</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea class="form-control" rows="3" maxlength="500" name="descricao" required name= descricao></textarea>
                    </div>
                    <?php if(isset($_GET["acao"]) and $_GET["acao"] == "chamado_enviado") {?>
                      <div class="alert alert-success" role="alert">
                        Chamado criado com sucesso!
                      </div>
                      <?php } ?>
                    <div class="row mt-5">
                      <div class="col-6">
                        <a href="home.php" class="btn btn-lg btn-warning btn-block" type="submit" >Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit" >Abrir</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>