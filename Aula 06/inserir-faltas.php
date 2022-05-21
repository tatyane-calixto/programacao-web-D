<?php
session_start();
require("conexao.php");
$id_usuario = $_SESSION['idusuario'];
$id_aluno = $_POST['alunos'];
$faltas = $_POST['faltas'];

function inserirFaltas($idUsuario, $idAluno, $faltas_)
{
  $conn = conect();
  $stmt = $conn->prepare("INSERT INTO tb_faltas (ce_id_usuario2,ce_id_notas,faltas) VALUES (?,?,?)");
  $stmt->bind_param("iii", $idUsuario, $idAluno, $faltas_);
  $stmt->execute();
  $conn->close();
  echo ("<script>
  window.alert('Cadastro de Faltas realizado com Sucesso!')
  window.location.href='home-sistema.php';
</script>");
}
inserirFaltas($id_usuario, $id_aluno, $faltas);
