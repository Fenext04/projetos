<?php
session_start();

if(!isset($_SESSION["autenticado"]) or $_SESSION["autenticado"] == "nao"){
  header("Location: index.php?autenticado=nao");
}
  
require("backend/recuperar_chamado.php");
 
  
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <a href="backend/logoff.php" style="color: white">Sair</a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              
              

              <?php 
                foreach($lista_chamadas as $key=>$value){ ?>
                  <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $value->titulo; ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $value->categoria; ?></h6>
                  <p class="card-text"><?php echo $value->descricao; ?></p>

                </div>
              </div>
                <?php }  
              ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a href="home.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>