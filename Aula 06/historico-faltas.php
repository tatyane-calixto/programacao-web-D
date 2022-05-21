<?php
require "validar-acesso.php";
require "faltas-alunos.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema para adicionar notas</title>
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
        <img src="./img/historico.svg" />
        <h1>Histórico de Faltas</h1>
        <br />
      </div>
    </header>
    <table class="table table-info">
      <tr class="table-secondary">
        <th> Nome do Estudante</th>
        <th>Faltas</th>


      </tr>
      <?php
      $id_usuario = $_SESSION['idusuario'];
      $faltas = array();
      $faltas = consultarFaltasAluno($id_usuario);
      foreach ($faltas as $aluno_falta) {
        $dados_aluno_falta = explode('#', $aluno_falta);
      ?>
        <tr>
        <?php

        echo "<td>";
        echo $dados_aluno_falta[0];
        echo "</td>";
        echo "<td>";
        echo $dados_aluno_falta[1];
        echo "</td>";
      }
        ?>




        </tr>






    </table>
    <div class="center">
      <a class="btn btn-info" href="home-sistema.php" role="button">Voltar</a>

    </div>
  </div>
</body>

</html>