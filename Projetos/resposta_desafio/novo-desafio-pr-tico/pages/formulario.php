<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>The Boys 3 - Formulário</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css" />
  </head>
  <body class="main-bg">
    <nav class="navbar navbar-expand-lg navbar-light bg-light transparent">
      <a class="navbar-brand" href="http://proeg.ufpa.br/cotic/"
        ><img src="../assets/logo_cotic.fw.png" width="256" height="64" alt=""
      /></a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#conteudoNavbarSuportado"
        aria-controls="conteudoNavbarSuportado"
        aria-expanded="false"
        aria-label="Alterna navegação"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"
              >Início <span class="sr-only">(página atual)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="formulario.php">
              Formulário <span class="sr-only">(página atual)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="lista.php">
              Lista <span class="sr-only">(página atual)</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <div id="conteudo_cadastro">
      <div class="area_cadastro">
        <h2>Criação de personagem: </h2>
        <form action="../backend_php/classes/Personagem.php" method="POST">
          <label for="nome">Nome:</label><br>
          <input type="text" name="nome" ><br>
          <label for="interprete">Intérprete:</label><br>
          <input type="text" name="interprete" ><br>
          <label for="idade">Idade:</label><br>
          <input type="number" name="idade" ><br>
          Alinhamento:<br>
          <label class="escolha" for="the_boys">The Boys</label>
          <input type="radio" id="the_boys" name="alinhamento" value="The_Boys"checked="the_boys">
          <label class="escolha" for="supers">Supers</label>
          <input type="radio" id="supers" value="Supers"name="alinhamento"><br>
          <label for="biografia"> Biografia: </label><br>
          <textarea name="biografia" rows="3">

          </textarea><input type="submit" value="Enviar" name="cadastro" class="butao">
          

        </form>  
      </div>
    </div>

    <!-- Insira o formulário aqui. -->

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
