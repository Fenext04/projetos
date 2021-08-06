<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
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
    </nav>

    <div class="container">    
      <div class="row">
      
        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
            <?php 
        if(isset($_GET["autenticado"]) and $_GET["autenticado"] == "nao"){ ?>
        <div class="alert alert-danger" role="alert">
          Insira um email e uma senha válidos para acessar a plataforma.
        </div>
        <?php }
      ?>
              <form action="backend/logar.php" method="POST">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="E-mail" required name = email>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="senha" placeholder="Senha" required name = senha>
                </div>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                <a href="cadastro.php" type="button" class="btn btn-dark btn-block" >Cadastro</a>

              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>