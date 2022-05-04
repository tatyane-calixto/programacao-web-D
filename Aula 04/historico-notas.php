<?php
require "validar-acesso.php";
?>
<?php
//array das informações dos alunos
$info_alunos = array();
//abrir o arquivo
$arquivo = fopen('arquivo-cadastro-notas.txt', 'r');
//feof - testa pelo fim do arquivo, ou seja, ele percorre o arquivo até encontrar o fim dele
//fgets - Vai ler uma linha de um ponteiro(cursor) de arquivo
while (!feof($arquivo)) {
  $registro = fgets($arquivo);
  $info_alunos[] = $registro;
}
fclose($arquivo);



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
        <h1>Histórico de Notas</h1>
        <br />
      </div>
    </header>
    <table class="table table-success">
      <tr class="table-secondary">
        <th> Nome do Estudante</th>
        <th>Nota 1</th>
        <th>Nota 2</th>
        <th>Média</th>

      </tr>
      <?php foreach ($info_alunos as $alunos) {
        $dados_alunos = explode('#', $alunos);
        if (count($dados_alunos) < 4) {
          continue; //pula a iteração atual, ignorando todo o código que está
          //abaixo dele

        } ?>
        <tr>
          <?php if ($dados_alunos[3] < 7) {


            echo "<td class='table-danger'>";
            echo $dados_alunos[0];
            echo "</td>";
            echo "<td class='table-danger'>";
            echo $dados_alunos[1];
            echo "</td>";
            echo "<td class='table-danger'>";
            echo $dados_alunos[2];
            echo "</td>";
            echo "<td class='table-danger'>";
            echo $dados_alunos[3];
            echo "</td>";
          } else {
            echo "<td>";
            echo $dados_alunos[0];
            echo "</td>";
            echo "<td>";
            echo $dados_alunos[1];
            echo "</td>";
            echo "<td>";
            echo $dados_alunos[2];
            echo "</td>";
            echo "<td>";
            echo $dados_alunos[3];
            echo "</td>";
          } ?>
        </tr>

      <?php } ?>

    </table>
    <div class="center">
      <a class="btn btn-secondary" href="home-sistema.php" role="button">Voltar</a>

    </div>
  </div>
</body>

</html>