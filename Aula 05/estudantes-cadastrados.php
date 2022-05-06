<?php
//$id_usuario = $_SESSION['idusuario'];
require("conexao.php");

function consultarAlunos($idUsuario)
{
  $conn = conect();
  $query_ = "SELECT nome_aluno,id_notas FROM tb_notas WHERE ce_id_usuario = $idUsuario";
  $result = $conn->query($query_);
  $conn = conect();
  $dados_alunos = array();
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $dados_alunos[] = $row['nome_aluno'] . '#' . $row['id_notas'];
    }
  } else {
    echo ("<script>
    window.alert('Não possui estudantes cadastrados!')
    window.location.href='home-sistema.php';
</script>");
  }

  return $dados_alunos;
  $conn->close();
  //return $result;
}
/*function verificarAlunos($resultado)
{
  
}*/
