<?php
session_start();
require("conexao.php");
$nome_aluno = $_POST['nome-aluno'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$id_usuario = $_SESSION['idusuario'];
function calcularMedia($n1, $n2)
{
  $media = ($n1 + $n2) / 2;
  $media = round($media, 2); //arrendonda o valor da média com duas casas decimais
  return $media;
}
function inserirNotas($nomeAluno, $n1, $n2, $media_, $idUsuario)
{
  $conn = conect();
  $stmt = $conn->prepare("INSERT INTO tb_notas (nome_aluno, nota1, nota2, media, ce_id_usuario) VALUES (?,?,?,?,?)");
  $stmt->bind_param("sdddi", $nomeAluno, $n1, $n2, $media_, $idUsuario);
  $stmt->execute();
  $conn->close();
  echo ("<script>
    window.alert('Cadastro realizado com Sucesso!')
    window.location.href='home-sistema.php';
</script>");
}
$media = calcularMedia($nota1, $nota2);
inserirNotas($nome_aluno, $nota1, $nota2, $media, $id_usuario);
