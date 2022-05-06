<?php
require("conexao.php");

function consultarHistoricoAluno($idUsuario)
{
  $conn = conect();
  $query_ = "SELECT * FROM  tb_notas WHERE ce_id_usuario =$idUsuario ORDER BY nome_aluno ASC";
  $result = $conn->query($query_);
  $dados_alunos = array();
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $dados_alunos[] = $row['nome_aluno'] . '#' . $row['nota1'] . '#' . $row['nota2'] . '#' . $row['media'];
    }
  } else {
    echo ("<script>
    window.alert('Você não possui alunos cadastrados!')
    window.location.href='home-sistema.php';
</script>");
  }
  $conn->close();
  return $dados_alunos;
}
