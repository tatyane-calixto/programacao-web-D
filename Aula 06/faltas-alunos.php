<?php
require("conexao.php");

function consultarFaltasAluno($idUsuario)
{
  $conn = conect();
  $query_ = "SELECT nome_aluno,id_notas, SUM(faltas) FROM tb_notas , tb_faltas WHERE ce_id_usuario2 = $idUsuario AND ce_id_notas = id_notas group by nome_aluno";
  $result = $conn->query($query_);
  $faltas_alunos = array();
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $faltas_alunos[] = $row['nome_aluno'] . '#' . $row['SUM(faltas)'];
    }
  } else {
    echo ("<script>
    window.alert('Você não possui alunos cadastrados!')
    window.location.href='home-sistema.php';
</script>");
  }
  $conn->close();
  return $faltas_alunos;
}
