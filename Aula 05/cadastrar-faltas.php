<?php
require "validar-acesso.php";
require "estudantes-cadastrados.php";

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
        <img src="./img/faltas.png" />
        <h1>Cadastrar as Faltas dos Estudantes</h1>
      </div>
    </header>

    <form action="inserir-faltas.php" method="POST">
      <div>
        <label>Nome do Estudante</label>
        <?php
        echo "<select name='alunos'>";
        echo "<option value=''> Escolha o nome do estudante</option>";
        $id_usuario = $_SESSION['idusuario'];



        $nome_aluno = array();
        $nome_aluno =  consultarAlunos($id_usuario);
        foreach ($nome_aluno as $alunos_) {
          $dados_nome_alunos = explode('#', $alunos_);
          echo "<option value=\"$dados_nome_alunos[1]\">$dados_nome_alunos[0]</option>";
        }
        echo "</select>";
        ?>
        <label>Número de Faltas</label>
        <input type="number" name="faltas" required />
      </div>
      </br>
      <div class="center">
        <a class="btn btn-info" href="home-sistema.php" role="button">Voltar</a>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div>
    </form>
  </div>

</body>

</html>