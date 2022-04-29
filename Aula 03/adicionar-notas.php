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
        <img src="./img/notas.svg" />
        <h1>Cadastrar Notas dos Estudantes</h1>
      </div>
    </header>
    <form class="contato-form" action="cadastrar-notas.php" method="POST">
      <div>
        <label> Nome do Estudante</label>
        <input type="text" name="nome-aluno" required>
      </div>
      <div>
        <label> Primeira Nota</label>
        <input type="number" name="nota1" step="any" required />
      </div>
      <div>
        <label> Segunda Nota</label>
        <input type="number" name="nota2" step="any" required />
      </div>
      <div class="center">
        <a class="btn btn-secondary" href="home-sistema.php" role="button">Voltar</a>
        <button type="submit" class="btn btn-primary">Cadastrar</button>

      </div>

    </form>


  </div>
</body>

</html>