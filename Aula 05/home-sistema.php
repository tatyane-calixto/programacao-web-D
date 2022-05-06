<?php
require "validar-acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema para adicionar notas </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/index.css">
</head>

<body>
  <div class="container">
    <nav>
      <ul>
        <li>
          <a href="home-sistema.php">Tela Inicial</a>
        </li>
        <li>
          <a href="sair.php">Sair</a>
        </li>
      </ul>
    </nav>
    <header>
      <div class="center">
        <img src="./img/icone-empresa.jpg" />
      </div>
    </header>
    <main>
      <section>
        <h3>Menu</h3>
        <p>Aqui você consegue adicionar nota e verificar o histórico.</p>
      </section>
      <section>
        <a href="adicionar-notas.php"><img src="./img/notas.svg" width="50px" height="50px">
          Cadastrar Notas</a>
      </section>
      <br />
      <section>
        <a href="historico-notas.php"><img src="./img/historico.svg" width="50px" height="50px">Histórico de Notas</a>
      </section>
      <br />
      <section>
        <a href="cadastrar-faltas.php"><img src="./img/faltas.png" width="50px" height="50px">Cadastrar Faltas</a>
      </section>
    </main>

  </div>
</body>

</html>